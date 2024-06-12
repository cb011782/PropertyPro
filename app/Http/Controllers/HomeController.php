<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //show notification
        session()->flash('flash.banner', 'Welcome to our website!');
        return view('home');
    }
}
