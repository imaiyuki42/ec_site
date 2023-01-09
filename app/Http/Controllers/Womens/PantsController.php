<?php

namespace App\Http\Controllers\Womens;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PantsController extends Controller
{
    public function index()
    {
        $products = Product::select('id','name', 'image', 'price')
                        ->where('target', '=', 2)
                        ->where('category_id', '=', 3)
                        ->get();

        return view('women.pants', compact('products'));
    }
}