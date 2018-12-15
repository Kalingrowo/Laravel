<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function store(Request $request){
      // validate input
      $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:5'
      ]);

      // set variable
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');

      // insert new records
      $user = new User([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($password)
      ]);

      // response
      if ($user->save()){
        $user->signin = [
          'href' => 'api/v1/user/signin',
          'method' => 'POST',
          'params' => 'email, password'
        ];
        $response = [
          'msg' => 'User created successfully !',
          'user' => $user
        ];
        return response()->json($response, 201);
      }

      $response = [
        'msg' => 'An error occured during registering a new user !'
      ];
      return response()->json($response, 404);
    }

    public function signin(Request $request){
      return "AuthController@signin is working well !";
    }
}
