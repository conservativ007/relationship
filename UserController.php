<?php
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  use App\User;
  use App\City;
  use App\Country;


  class UserController extends Controller{
    public function one(Request $request){

      $user = User::find(1);

      return view('test.users', [
        'users'   => $users,
      ]);
    }
  }
