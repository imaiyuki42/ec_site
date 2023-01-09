<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $products = Cart::where('user_id', '=', Auth::id())
                            ->get();

        return view('cart.cart', compact('products'));
    }

    public function store(Request $request)
    {
        $product = new Cart();
        
        $product->user_id = Auth::id();
        $product->product_id = $request->input('product_id');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->image = $request->input('image');
        $product->color = $request->input('color');
        $product->size = $request->input('size');
        $product->quantity = $request->input('quantity');

        $product->save();

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        $product = Cart::find($id);
        $product->delete();

        return back();
    }
}
