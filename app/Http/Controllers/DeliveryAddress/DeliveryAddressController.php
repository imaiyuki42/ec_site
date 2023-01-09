<?php

namespace App\Http\Controllers\DeliveryAddress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryAddressController extends Controller
{
    public function index()
    {
        return view('delivery_address.delivery_address');
    }
}
