<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable= array('name');
 public function postlisting(){
    	return $this->hasMany('App\postlisting');
    }

    public function scopeFindAll($query)
    {
    	return $query->orderBy('name', 'ASC')
    	    ->get()
    	    //->toArray()
    	    ->pluck('name', 'id');
    }

    public function vendorListings()
    {
    	return $this->hasMany('App\vendorlistings');
    }
}
