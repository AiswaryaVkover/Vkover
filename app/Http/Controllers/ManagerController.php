<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manager;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manager = Manager::orderBy('created_at','DESC')->get();
        return view('manager.index', compact('manager'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'mailid' => 'required|email',
            'mobilenumber' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            
            
        ]);
    

        // Create a new Manager instance and store it in the database
        $manager = new Manager();
        $manager->mailid = $request->input('mailid');
        $manager->mobilenumber = $request->input('mobilenumber');
        $manager->firstname = $request->input('firstname');
        $manager->middlename = !empty($request->input('middlename'))? $request->input('middlename') :null;
        $manager->lastname = !empty($request->input('lastname'))? $request->input('lastname') :null;
        $manager->pan = !empty($request->input('pan'))? $request->input('pan') :null;
        $manager->aadhar =!empty($request->input('aadhar'))? $request->input('aadhar') :null;
        $manager->bankname = !empty($request->input('bankname'))? $request->input('bankname') :null;
        $manager->ifsccode = !empty($request->input('ifsccode'))? $request->input('ifsccode') :null;
        $manager->accountnumber = !empty($request->input('accountnumber'))? $request->input('accountnumber') :null;
        
        $manager->save();

        // Optionally, you can redirect the user after successful submission
        return redirect()->route('manager.index')->with('success', 'Manager created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manager = Manager::findorFail($id);
        return view('manager.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
