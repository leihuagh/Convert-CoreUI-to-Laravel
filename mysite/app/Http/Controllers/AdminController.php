<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $this->loginValidation($request);
            if (Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password'],
                'admin' => '1'
            ])) {
                // echo "Success";
                // die;
                return redirect()->route('dashboard');
            } else {
                // echo "failed";
                // die;
                return redirect()->route('adminLogin')->with('flash_message_error', 'Invalid Email or Password');
            }
        }
        return view('admin.login.index');
    }

    public function index(Request $request)
    {
        return view('admin.dashboard.index');
    }

    private function loginValidation(Request $request)
    {
        return $request->validate([
            'email'    => 'required|email',
            'password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ]);
    }
}
