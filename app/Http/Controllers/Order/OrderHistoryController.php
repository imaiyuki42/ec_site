<?php

namespace App\Http\Controllers\OrderHistory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function index()
    {
        return view('order.order_history');
    }
}
