<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $info_login = $request->only('email', 'password');
        if (Auth::attempt($info_login)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        $errors = [];
        if (!Auth::validate($info_login)) {
            $errors['email'] = 'Thông tin đằng nhập không chính xác';
        }
        return back()->withErrors($errors);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
