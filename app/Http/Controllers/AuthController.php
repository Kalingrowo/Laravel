<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth:api', ['except' => ['login', 'store']]);
     }

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
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
        $user->login = [
          'href' => 'api/v1/user/login',
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

    public function login(Request $request){
      $credentials = request(['email', 'password']);
      if (!$token = auth('api')->attempt($credentials)) {
          return response()->json(['msg' => 'Unauthorized'], 401);
      }
      return response()->json([
          'token' => $token,
          'expires' => auth('api')->factory()->getTTL() * 60,
      ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
