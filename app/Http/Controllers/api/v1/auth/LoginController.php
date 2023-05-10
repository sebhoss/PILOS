<?php

namespace App\Http\Controllers\api\v1\auth;

use App\Auth\OIDC\OIDCProvider;
use App\Auth\Shibboleth\ShibbolethProvider;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use LdapRecord\Models\ModelNotFoundException;
use LdapRecord\Models\OpenLDAP\User as LdapUser;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        logout as protected logoutApplication;
        login as protected loginApplication;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
        $this->middleware('auth:users,ldap')->only(['logout']);
    }

    public function username()
    {
        return 'email';
    }

    public function login(Request $request)
    {
        // Check if local login is enabled
        if (!config('auth.local.enabled')) {
            abort(404);
        }

        $this->loginApplication($request);
    }

    protected function credentials(Request $request)
    {
        return [
            'password' => $request->input('password'),
            'email' => $request->input('email'),
        ];
    }

    /**
     * The user has been authenticated.
     *
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        Log::info('Local user '.$user->email.' has been successfully authenticated.');
    }

    public function logout(Request $request)
    {
        // Redirect url after logout
        $redirect = false;
        $externalAuth = false;
        $externalSignOut = false;

        // Logout from external authentication provider
        switch (\Auth::user()->authenticator) {
            case 'shibboleth':
                $redirect = app(ShibbolethProvider::class)->logout(url('/logout'));
                $externalAuth = 'shibboleth';
                $externalSignOut = true;
                break;
            case 'oidc':
                $externalAuth = 'oidc';
                $url = Socialite::driver('oidc')->logout(session()->get('oidc_id_token'), url("/logout"));
                if($url){
                    $redirect = $url;
                    $externalSignOut = true;
                }
                break;
            case 'saml2':
                $externalAuth = 'saml2';
                $url = Socialite::driver('saml2')->logout(session()->get('saml2_name_id'), url("/logout"));
                if($url){
                    $redirect = $url;
                    $externalSignOut = true;
                }
                break;
        }

        // Destroy application session
        $this->logoutApplication($request);

        return response()->json([
            'redirect' => $redirect,
            'external_auth' => $externalAuth,
            'external_sign_out' => $externalSignOut
        ]);
    }
}
