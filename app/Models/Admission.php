<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;


    protected $fillable= [
    		'phone',
    		'nid',
    		'name',
    		'father',
    		'parent_phone',
    		'dob',
    		'district_id',
    		'branch_id',
    		'batch_id',
    		'qualification_id',
    		'subscrip_id',
    		'image',
    		'sign',


    ];

    public function Batch
    {

    	return $this->belongsTo(Batch::class);
    }


    public function Branch
    {

    	return $this->belongsTo(Branch::class);
    }


    public function Course
    {

    	return $this->belongsTo(Course::class);
    }


    public function District
    {

    	return $this->belongsTo(District::class);
    }


    public function Qualification
    {

    	return $this->belongsTo(Qualification::class);
    }

     public function Subscrip
    {

    	return $this->belongsTo(Subscrip::class);
    }

}
