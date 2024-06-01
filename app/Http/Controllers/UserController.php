<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the user's products page.
     *
     * @return \Illuminate\View\View
     */
    public function products()
    {
        // Logika untuk menampilkan daftar produk pengguna
        $products = auth()->user()->products;

        return view('user.products', compact('products'));
    }

    /**
     * Display the user's categories page.
     *
     * @return \Illuminate\View\View
     */
    public function categories()
    {
        // Logika untuk menampilkan daftar kategori pengguna
        $categories = auth()->user()->categories;

        return view('user.categories', compact('categories'));
    }
}