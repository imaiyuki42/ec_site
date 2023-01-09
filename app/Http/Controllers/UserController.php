<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.user_edit');
    }

    public function edit(Request $request)
    {
        User::where('id', '=', Auth::id())
                ->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'postcode' => $request->input('postcode'),
                    'address' => $request->input('address'),
                    'b_year' => $request->input('b_year'),
                    'b_month' => $request->input('b_month'),
                    'b_day' => $request->input('b_day'),
                    'gender' => $request->input('gender'),
                ]);
        return redirect()->route('home.index');
    }

    public function passwordIndex()
    {
        return view('user.password_edit');
    }

    public function passwordEdit(Request $request)
    {
        User::where('id', '=', Auth::id())
                ->update([
                    'password' => bcrypt($request->input('password')),
                ]);
        return redirect()->route('home.index');
    }
    
}
