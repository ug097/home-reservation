<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // ログイン画面
    public function login(){
        return view('login');
    }

    // 新規登録
    public function signup(){
        return view('signup');
    }
}
