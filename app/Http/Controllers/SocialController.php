<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirect()
    {
    	return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
    	$user =Socialite::driver ('google')->user();
    	return ($user->getAvatar());
    }
    public function redirectf() {
        return Socialite::driver('facebook')->redirect();   
    }
    public function callbackf(){
        $user = Socialite::driver('facebook')->user();

      return ($user->getAvatar());
    }
}
