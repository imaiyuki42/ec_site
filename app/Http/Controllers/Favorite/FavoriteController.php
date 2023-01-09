<?php

namespace App\Http\Controllers\Favorite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $products = Favorite::join('products', 'favorites.product_id', '=', 'products.id')
                                ->where('user_id', '=', Auth::id())
                                ->get();
        
        $favorite = Favorite::where('user_id', '=', Auth::id())
                                ->first();

        return view('favorite.favorite', compact('products','favorite'));
    }

    public function store($id)
    {
        $favorite = new Favorite();

        $favorite->user_id = Auth::id();
        $favorite->product_id = $id;

        $favorite->save();

        return redirect()->route('favorite.index');
    }

    public function destroy($id)
    {
        Favorite::where('product_id', '=', $id)
                    ->delete();

        return back();
    }
}
