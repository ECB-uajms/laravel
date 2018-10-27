<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
    	return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider){
        try{

            $user = Socialite::driver($provider)->user();
            $createUser = User::firstOrCreate([
                'email' =>$user->getEmail()
            ],[
                'name'=>$user ->getEmail()
            ]);

            auth()->login($createUser);
            return redirect('/home')-> with ('alert', "Bienvenido $createUser ->name");
        }catch(\GuzzleHttp\Exception\ClientException $e){
            dd($e);
        }




    }
   
    
}
