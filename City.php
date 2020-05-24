<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class City extends Model{
    public function user(){
      return hasOne('App\User');
    }

}
