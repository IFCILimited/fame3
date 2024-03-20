<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    
    
    public function index()
    {
        return view('landing.index');
    }

    public function signin($roleid) {
        $role_id = decrypt($roleid);
        session(['role_id' => $role_id]);
        return redirect()->route('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    
    
}
