<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth1\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view 
     */
    public function create() :view
    {
       
        return view('Auth.login');
    }

    /**
     * Handle an incoming authentification request 
     */
    public function store(LoginRequest $request){
        $request->authentificated();
        $request->session()->regenerate();
        
        return redirect()->intended(RouteServiceProvider::HOME); 
           
    }

   

    /** 
     * Destroy an authentificatin session 
     */

     public function destroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
     }

}
