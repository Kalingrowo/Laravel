<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Lcobucci\JWT\Parser;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{

    public function __construct() {
      $this->middleware('auth:api', ['only' => ['signout']]);
    }

    public $successStatus = 200;

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

    public function signin() {
      //return "AuthController@signin is working well !";
      $credentials = request(['email', 'password']);
      if(Auth::attempt($credentials)){
        $user = Auth::user();
        $succes['token'] = $user->createToken('Laravel Pass Grant Client')->accessToken;
        return response()->json([
          'success' => $succes
        ], $this->successStatus);
      }

      return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function signout(Request $request) {
      $user = $request->user();

      if($user) {
        $value = $request->bearerToken();
        $id = (new Parser())->parse($value)->getHeader('jti');

        $token = $user->tokens->find($id);
        $token->revoke();
        // $userTokens = $user->tokens;
        // foreach ($userTokens as $token) {
        //   $token->revoke();
        // }
        return response()->json([
          'success' => 'User signed out'
        ], $this->successStatus);
      }

      return response()->json([
        'error' => 'Unauthorized'
      ], 401);
    }
}
