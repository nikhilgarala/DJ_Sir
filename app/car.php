<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
   protected $table ="cars";
   public $timestamps=true;
   protected $fillable = ['c_nm', 'c_model',	'c_lonch_date',	'c_short_desc',	'c_long_desc',	'c_type',	'c_image',	'slug',	'c_price'];
   public function Photo()
   {
      return $this->hasMany('App\Photo');
   }
}
