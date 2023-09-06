<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;

class LoginController extends Controller
{
    /**
     * ログイン画面を表示する
     * 
     * @return view
     */
    public function showLogin()
    {
        return view('login.login');
    }

    /**
     * ログイン
     * 
     * @param App\Http\Requests\LoginFormRequest $request
     */
    public function login(LoginFormRequest $request)
    {
        dd($request->all());
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
