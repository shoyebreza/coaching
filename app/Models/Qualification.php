<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable=[
    		'Qualifi_name',
    ];


    public function Admission()
    {
    	return $this->hasOne(Admission::class);
    }

}
