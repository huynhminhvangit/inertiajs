<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Mockery\Exception;

class SocialController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function facebookRedirect(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginWithFacebook(): \Illuminate\Http\RedirectResponse
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('email', $user->getEmail())->first();

            if($isUser) {
                if(empty($isUser->facebook_id)) {
                    $isUser->update([
                        'facebook_id' => $user->getId()
                    ]);
                }
                Auth::login($isUser);
                return \redirect()->intended(RouteServiceProvider::HOME);
            } else {
                $createUser = User::create([
                    'name'        => $user->getName(),
                    'email'       => $user->getEmail(),
                    'facebook_id' => $user->getId(),
                    'password'    => encrypt(Str::random(16)),
                ]);

                Auth::login($createUser);
                return \redirect()->intended(RouteServiceProvider::HOME);
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function googleRedirect(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginWithGoogle(): \Illuminate\Http\RedirectResponse
    {
        try {
            $user = Socialite::driver('google')->user();
            $isUser = User::where('email', $user->getEmail())->first();

            if($isUser) {
                if(empty($isUser->google_id)) {
                    $isUser->update([
                       'google_id' => $user->getId()
                    ]);
                }
                Auth::login($isUser);
                return \redirect()->intended(RouteServiceProvider::HOME);
            } else {
                $createUser = User::create([
                    'name'        => $user->getName(),
                    'email'       => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password'    => encrypt(Str::random(16)),
                ]);

                Auth::login($createUser);
                return \redirect()->intended(RouteServiceProvider::HOME);
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
