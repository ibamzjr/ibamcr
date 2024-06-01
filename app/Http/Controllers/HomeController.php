<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome(Request $request)
    {
        // Check if there is a 'success' message in the session
        $showLoginModal = $request->session()->has('success');

        return view('user.home', compact('showLoginModal'));
    }
}