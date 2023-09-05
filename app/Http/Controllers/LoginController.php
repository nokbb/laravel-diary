<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * ログイン画面を表示する
     * 
     * @return view
     */
    public function showLogin()
    {
        return view('diary.login');
    }

    /**
     * サインアップ画面を表示する
     * 
     * @return view
     */
    public function showSignup()
    {
        return view('diary.signup');
    }
}
