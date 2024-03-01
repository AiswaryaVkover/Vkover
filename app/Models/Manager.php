<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospitallist;

class Manager extends Model
{
    protected $fillable = [
        'id',
        'mailid' , 
        'mobilenumber' ,
         'firstname' , 
         'middlename',
         'lastname',
         'pan',
         'aadhar',
         'bankname',
         'ifsccode',
         'accountnumber'
        ];

        
        protected $nullable = [
            'middlename', 'pan', 'aadhar', 'bankname', 'ifsccode', 'accountnumber'
        ];

    public function hospitallist()
    {
        return $this->hasMany(Hospitallist::class);
    }

   
    use HasFactory;
}
