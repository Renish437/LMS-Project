<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
    try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'photo' => $googleUser->avatar,
                    'password' => Hash::make('password'),
                    'role' => 'user'
                ]);
            }
            Auth::login($user);

            return redirect()->route('user.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Google login failed $e");
        }
    }

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }
    public function handleGithubCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();
            $user = User::where('email', $githubUser->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $githubUser->getName() ?? $githubUser->getNickname(),
                    'email' => $githubUser->email ?? null,
                    'photo' => $githubUser->avatar ?? null,
                    'password' => Hash::make('password'),
                    'role' => 'user'
                ]);
            }
            Auth::login($user);

            return redirect()->route('user.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Github login failed $e");
        }
    }
}
