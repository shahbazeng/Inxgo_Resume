<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;  // Add this line
use App\User; // Add this line

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->id)->first();
       
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('admin');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                   
                ]);
      
                Auth::login($newUser);
                return redirect()->intended('admin');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
