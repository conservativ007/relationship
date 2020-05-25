<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class City extends Model{
    public function user(){
      return belongsTo('App\User');
    }

    public function country(){
      return belongsTo('App\Country');
    }

}
