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
    public function test(){
        Auth::logout();

    // Redirect to a desired location after logout
    return redirect('/login');
    }
}
