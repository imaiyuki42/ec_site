<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawController extends Controller
{
    public function index()
    {
        return view('other.law');
    }
}
