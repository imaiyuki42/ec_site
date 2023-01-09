<?php

namespace App\Http\Controllers\Womens;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class InnerController extends Controller
{
    public function index()
    {
        $products = Product::select('id','name', 'image', 'price')
                        ->where('target', '=', 2)
                        ->where('category_id', '=', 4)
                        ->get();
                        
        return view('women.inner', compact('products'));
    }
}
