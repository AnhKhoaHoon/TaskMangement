<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function ShowRegisterForm()
    {
        return view('auth.register');
    }
    public function register(LoginRequest $request)
    {
     $user=new User([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>Hash::make( $request->input('password')),
        // 'password'=>bcrypt( $request->input('password')),
        'status'=>$request->input('status','active'),
        'type'=>$request->input('type','admin'),
    ]);
    $user->save();
    return redirect()->route('login');
    }
}
