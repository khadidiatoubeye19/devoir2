<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
//use Spatie\Permission\Traits\HasRoles;
use HasRoles;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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



    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Connexion réussie
            //$user = Auth::user();
            // if ($user->hasRo) {
                return redirect('/accueil');
            //}
        } else {
            // Échec de la connexion
            return back()->withErrors([
                'email' => 'Les informations d\'identification fournies ne sont pas valides.',
            ]);
        }
    }
}







