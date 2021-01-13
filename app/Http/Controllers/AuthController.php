<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\User;


class AuthController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    */
    public $loginAfterSignUp = true;

    public function register(Request $request)
    {
   $user = $request->json()->all();
 
      $user = User::create([

        'name' => $user['name'],
        'email' => $user['email'],
        'password' => bcrypt($user['password']),
       
      ]);
         
      $token = auth()->login($user);

    return $this->respondWithToken($token);

  // return response()->json($user, 201);
  
    }

     public function login(Request $request)
    {
    
      $array = $request->json()->all();


     $credentials = Arr::only($array, ['email', 'password']);
     

     if (!$token = auth()->attempt($credentials)) {
      return response()->json(['error' => 'false'], 401);
    }

      return $this->respondWithToken($token);
     }

    public function getAuthUser(Request $request)
    {
        return response()->json(auth()->user());
    }
    public function logout()
    {
        auth()->logout();
        return response()->json(['message'=>'Successfully logged out']);
    }
    protected function respondWithToken($token)
    {
      return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth('api')->factory()->getTTL() * 60
      ]);
    }

}

