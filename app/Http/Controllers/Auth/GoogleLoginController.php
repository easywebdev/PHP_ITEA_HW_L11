<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 24.08.18
 * Time: 13:00
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Socialite;

class GoogleLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $user->token;

        echo $user->token;
    }
}