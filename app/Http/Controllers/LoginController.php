<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

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
        $credentials = $request->only('email', 'password');

        //①アカウントがロックされていたら弾く
        $user = $this->user->getUserByEmail($credentials['email']);

        if (!is_null($user)) {
            if ($this->user->isAccountLocked($user)) {
                return back()->withErrors([
                    'danger' => 'アカウントがロックされています。',
                ]);
            }

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                //②成功したらエラーカウントを0にする
                $this->user->resetErrorCount($user);

                return redirect()->route('home')->with('success', 'ログイン成功しました！');
            }

            //③ログイン失敗したらエラーカウントを1増やす
            $user->error_count = $this->user->addErrorCount($user->error_count);

            //④エラーカウントが6以上の場合はアカウントをロックする
            if ($this->user->lockAccount($user)) {
                return back()->withErrors([
                    'danger' => 'アカウントがロックされました。解除したい場合は運営者に連絡してください。',
                ]);
            }
            $user->save();
        }

        return back()->withErrors([
            'danger' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

    /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('showLogin')->with('danger', 'ログアウトしました！');
    }
}
