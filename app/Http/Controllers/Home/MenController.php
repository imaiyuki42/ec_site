<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class MenController extends Controller
{
    public function index()
    {
        $pickup_products = Product::select('id','name', 'image', 'price')
                            ->where('target', '=', '1')
                            ->where('pick_up', '=', 1)
                            ->get();
                            
        return view('home.men',compact('pickup_products'));
    }
}
