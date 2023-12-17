<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    /**
     * mendaftarkan data penggunaka
     * 
     * @param Request
     * @return json
     */
    public function register(Request $req){
        // User::create($req)
    }

    /**
     * View Login
     * 
     * @return view
     */
    public function login(){
        return view('login');
    }

    /**
     * Sign In proses
     */
    public function signin(Request $req){
        $cred = $req->only('email', 'password');

        if ($auth = Auth::attempt($cred)) {
            $req->session()->regenerate();

            return redirect('/');
        }

        return abort(403, 'Login tidak valid ');
    }

    /**
     * Logout
     */
    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
