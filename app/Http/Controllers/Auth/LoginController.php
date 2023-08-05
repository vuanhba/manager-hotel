<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getform(){
        return view('parts.backend.auth.login');
    }
    public function login(LoginRequest $request){
       
    $data= [
        'email'=> $request->email,
        'password'=>$request->password
        ];

    if(Auth::attempt($data)){
        return redirect()->route('admin.das')->with('message','Đăng nhập thành công');
    }
    return redirect()->route('admin.getform')->with('error','Đăng nhập không thành công');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.getform')->with('message','Đăng xuất thành công');

    }
}
