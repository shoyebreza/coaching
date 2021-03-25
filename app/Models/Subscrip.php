<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscrip extends Model
{
    use HasFactory;

    protected $fillable=[
    		'Sub_type',
    ];



    public function Admission()
    {
    	return $this->hasOne(Admission::class);
    }
}
