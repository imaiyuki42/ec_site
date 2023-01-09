<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class WomenController extends Controller
{
    public function index()
    {
        $products = Product::select('id','name', 'image', 'price')
                    ->where('target', '=', '2')
                    ->get();
        return view('home.women', compact('products'));
    }
}
