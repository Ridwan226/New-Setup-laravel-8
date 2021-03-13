<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class GoogleController extends Controller
{
    //
    
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            
            
            // dd($user);
            
            $finduser = User::where('provider_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended('home');
            } else {
              
              $random = Str::random(20);
              
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' =>'google',
                    'image' => $user->avatar_original,
                    'provider_id' => $user->id,
                    'password' => Hash::make($random),
                ]);

                Auth::login($newUser);
                $newUser->assignRole('member');
                return redirect()->intended('home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
