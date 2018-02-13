<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  
 public function phone()
    {
    	return $this->hasOne('App\Phone');
    }

 public function category()
    {
    	return $this->belongsTo('App\Category')->withDefault([
    	    'category_name' => 'undefined',
    		]);
    }
}
