<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
      public function area(){
          return $this->belongsTo('App\Area');
      }
      public function routes(){
          return $this->belongsToMany('App\Route');
      }

      

}
