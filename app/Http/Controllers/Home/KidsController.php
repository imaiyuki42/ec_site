<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class KidsController extends Controller
{
    public function index()
    {
        $pickup_products = Product::select('id','name', 'image', 'price')
                            ->where('target', '=', '0')
                            ->where('pick_up', '=', 1)
                            ->get();        

        return view('home.kids',compact('pickup_products'));
    }
}
