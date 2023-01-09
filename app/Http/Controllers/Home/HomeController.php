<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $pickup_products = Product::where('pick_up', '=', 1)
                                ->get();

        return view('home.home', compact('pickup_products'));
    }
}
