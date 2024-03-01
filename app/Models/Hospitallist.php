<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manger;

class Hospitallist extends Model
{
     
    protected $fillable = ['id','username' , 'hospitalname' , 'pan' , 'bankname','ifsccode','accountnumber'];

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function lead()
    {
        return $this->hasMany(Lead::class);
    }
    use HasFactory;
}


