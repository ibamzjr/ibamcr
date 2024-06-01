<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->withErrors(['username' => 'Invalid username or password']);
        }
    }

    public function dashboard()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
        return view('admin.dashboard', compact('categories', 'products'));
    }
}
