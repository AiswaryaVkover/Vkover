<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = 
    [
    'id',
    'name' ,
     'mobile' , 
     'dob' , 
     'remark',
     'hospital_id',
     'created_at'
      ];

      public function hospitallist()
      {
          return $this->belongsTo(Hospitallist::class);
      }
    use HasFactory;
}
