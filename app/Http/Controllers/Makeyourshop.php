<?php

namespace App\Http\Controllers;



use App\Shop;
use Illuminate\Http\Request;

class Makeyourshop extends Controller
{
    public $loginAfterSignUp = true;

    public function register(Request $request)
    {

      $shop = $request->json()->all();
 
      $shop = Shop::create([

        'name' => $shop['name'],
        'email' => $shop['email'],
        'password' => bcrypt($shop['password']),
       
      ]);
         
     
  /*
      $shop = Shop::create([
        'name' => $request->name,
        'fname' => $request->fname,
        'lname' => $request->lname,
        'email' => $request->email,
        'address' => $request->address,
        'city' => $request->city,
        'country' => $request->country,
        'phone' => $request->phone,
        'pid' => $request->pid,
        'commercialregister' => $request->commercialregister,
        'about' => $request->about,
        'image' => $request->image,
        'password' => bcrypt($request->password),
      ]);

*/
      $token = auth()->login($shop);

      return $this->respondWithToken($token);
     
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
        return response()->json(auth()->shop());
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
