<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $address = User::join('delivery_addresses','users.id', 'delivery_addresses.user_id')
                                ->where('user_id', '=', Auth::id())
                                ->first();
        $payments = User::join('payments','users.id', 'payments.user_id')
                                ->where('user_id', '=', Auth::id())
                                ->get();
        $products = Cart::where('user_id', '=', Auth::id())
                                ->get();
        
        $numOfDays = 7;
        $dt = new Carbon();
        $format = 'MM.DD (ddd)';

        $week[0] = $dt->today()->isoFormat($format);

        for ($i=1; $i < $numOfDays ; $i++) {
            $week[$i] = $dt->copy()->addDay($i)->isoFormat($format);
        }

        return view('order.order', compact('address', 'payments','products', 'week'));
    }

    public function store(Request $request)
    {
        $purchase_products = new Order();

        $purchase_products->user_id = Auth::id();
        $purchase_products->product_name = $request->input('product_name');
        $purchase_products->price = $request->input('price');
        $purchase_products->size = $request->input('size');
        $purchase_products->color = $request->input('color');
        $purchase_products->quantity = $request->input('quantity');
        $purchase_products->image = $request->input('image');
        $purchase_products->del_address = $request->input('del_address');
        $purchase_products->del_day = $request->input('del_day');
        $purchase_products->pay_method = $request->input('pay_method');

        $purchase_products->save();

        return redirect()->route('home.index');
    }
}
