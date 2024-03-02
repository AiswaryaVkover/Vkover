<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\hospitalListController;
use App\Http\Controllers\LeadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/manager', ManagerController::class);
Route::resource('/hospital', hospitalListController::class);
Route::resource('/lead', LeadController::class);
Route::get('/managers/{managerId}/hospitals', [hospitalListController::class, 'createHospitalUnderManager'])->name('hospitallist.create');
Route::post('/hospitallist', [HospitalListController::class, 'store'])->name('hospitalList.store');
Route::resource('/leads', LeadController::class);
Route::get('hospital/{hospitalId}/lead', 'App\Http\Controllers\LeadController@createLeadUnderHospital')->name('lead.create');
Route::post('/leadlist', [LeadController::class, 'store'])->name('lead.store');
Route::get('/hospital/{hospitalId}/leads', [LeadController::class, 'leadsForHospital'])->name('lead.index');



