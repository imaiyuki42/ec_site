<?php

namespace App\Http\Controllers\Kids;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class OnePieceController extends Controller
{
    public function index()
    {
        $products = Product::select('id','name', 'image', 'price')
                        ->where('target', '=', 0)
                        ->where('category_id', '=', 6)
                        ->get();        
        return view('kids.one_piece', compact('products'));
    }
}
