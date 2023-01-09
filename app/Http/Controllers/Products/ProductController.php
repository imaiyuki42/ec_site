<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $favorite = Favorite::where('product_id',$id)
                    ->where('user_id',Auth::id())
                    ->first();

        $color = DB::table('products')
                    ->join('colors', 'products.color_id', '=', 'colors.id')
                    ->select('color')
                    ->where('products.id', '=', $id)
                    ->first();

        $size = DB::table('products')
                    ->join('sizes', 'products.size_id', '=', 'sizes.id')
                    ->select('size')
                    ->where('products.id', '=', $id)
                    ->first();

        return view('products.product',compact('product', 'color', 'size','favorite'));
    }
    
}
