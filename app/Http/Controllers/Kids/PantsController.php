<?php

namespace App\Http\Controllers\Kids;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PantsController extends Controller
{
    public function index()
    {
        $products = Product::select('id','name', 'image', 'price')
                        ->where('target', '=', 0)
                        ->where('category_id', '=', 3)
                        ->get();        
        return view('kids.pants', compact('products'));
    }
}
