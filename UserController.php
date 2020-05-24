<?php
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  use App\User;
  use App\City;
  use App\Country;


  class UserController extends Controller{
    public function one(Request $request){

// не знаю как правельно делать связь между таблицами users, city, coutry, где должно быть hasOne а где belongsTo ?

      $users = User::all();
      $cities = City::all();
      $country = Country::find(1);

      $user = User::find(1);
      $user_country = $user->city;

      //dump($users);
      //dump($cities);
      //dump($user_country);
      return view('test.users', [
        'users'   => $users,
        'cities'  => $cities,
        'country' => $country,
      ]);
    }
  }
