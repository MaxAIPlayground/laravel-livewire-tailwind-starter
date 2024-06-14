<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Google\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Masmerise\Toaster\Toaster;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        $user = Socialite::driver('google')->stateless()->user();

        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            // Log in the existing user.
            auth()->login($existingUser, remember: true);
        } else {
            // Create a new user.
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->password = bcrypt(request(Str::random())); // Set some random password
            $newUser->email_verified_at = now();
            $newUser->save();

            // Log in the new user.
            auth()->login($newUser, remember: true);

            Toaster::success('You are logged in!');

            // Show newsletter opt-in in first!
            return redirect()->route('newsletter');
        }

        return redirect()->intended(route('feature'));
    }

    public function loginOneTap(): RedirectResponse
    {
        \Log::debug(request()->all());

        if ($_COOKIE['g_csrf_token'] !== request()->input('g_csrf_token')) {

            \Log::info('invalid g_csrf_token token value', [
                '$_COOKIE[g_csrf_token]' => $_COOKIE['g_csrf_token'],
                'request()->input(g_csrf_token)' => request()->input('g_csrf_token'),
            ]);

            // Invalid CSRF token
            return back();
        }

        try {

            $idToken = request()->input('credential');

            $client = new Client([
                'client_id' => env('GOOGLE_CLIENT_ID')
            ]);

            $payload = $client->verifyIdToken($idToken);

            if (!$payload) {

                // Invalid ID token
                return back();
            }

            $existingUser = User::where('google_id', $payload['sub'])->first();

            if ($existingUser) {
                // Log in the existing user.
                auth()->login($existingUser, remember: true);
            } else {
                // Create a new user.
                $newUser = new User();
                $newUser->name = $payload['name'];
                $newUser->email = $payload['email'];
                $newUser->google_id = $payload['sub'];
                $newUser->password = bcrypt(request(Str::random())); // Set some random password
                $newUser->email_verified_at = now();
                $newUser->save();

                // Log in the new user.
                auth()->login($newUser, remember: true);

                Toaster::success('You are logged in!');

                // Show newsletter opt in first!
                return redirect()->route('newsletter');
            }
        } catch (\Exception $e) {
            \Log::error($e);
        }

        return redirect()->intended(route('feature'));
    }
}
