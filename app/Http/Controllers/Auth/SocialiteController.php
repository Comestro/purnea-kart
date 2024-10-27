<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            \Log::info('Google User: ', (array) $googleUser);
            $existingUser = User::where('email', $googleUser->getEmail())->first();

            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'image' => $googleUser->getAvatar(),
                    'isAdmin' => 0,
                    'google_id' => $googleUser->getId(),
                    'password' => ('123456dummy'), 
                ]);
                Auth::login($newUser);
            }

            return redirect()->intended(Auth::user()->isAdmin == 1 ? 'admin' : '/');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route('account.login.form')->with('error', 'Unable to login with Google, please try again.');
        }
    }
}
