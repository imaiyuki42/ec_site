<?php

namespace App\Http\Controllers\Mens;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class KnitController extends Controller
{
    public function index()
    {
        $products = Product::select('id','name', 'image', 'price')
                        ->where('target', '=', 1)
                        ->where('category_id', '=', 10)
                        ->get(); 

        return view('men.knit', compact('products'));
    }
}
