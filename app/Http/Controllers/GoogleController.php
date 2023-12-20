<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->getId())->first();

            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('index');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->getEmail(),
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('12345678'),
                ]);

                Auth::login($newUser);
                return redirect()->intended('landing');
            }

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
