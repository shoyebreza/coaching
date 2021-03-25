<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable= [
    	'batch_name',

    ];



    public function Admission()
    {
    	return $this->hasOne(Admission::class);
    }
}
