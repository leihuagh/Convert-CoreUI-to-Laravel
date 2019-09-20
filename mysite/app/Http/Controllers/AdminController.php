<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            dd('Hi');
        }
        return view('admin.login.index');
    }

    public function index(Request $request)
    {
        return view('admin.index');
    }
}
