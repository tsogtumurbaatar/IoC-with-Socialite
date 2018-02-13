<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
   public function post()
    {
    	return $this->belongsTo('App\Post')->withDefault([
    	    'phonenumber' => 'Guest Author',
    		]);;
    }

}
