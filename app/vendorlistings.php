<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendorlistings extends Model
{
    //
    protected $fillable = [
        'user_id', 'title', 'listing_desc','phone_number','state_id','city','min_price','max_price','category_id','pix_upload'
    ];
    

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function category()
    {
    	return $this->belongsTo('App\categories');
    }
}
