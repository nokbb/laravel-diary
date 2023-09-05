@extends('layout')
@section('title', 'ログイン')
<div class="login-inner">
  <form action="" class="login">
    <fieldset>
      <legend class="login-head">Login</legend>
      <div class="input">
        <input type="email" placeholder="Email" required />
        <span class="fade"><i class="fa-solid fa-envelope"></i></span>
      </div>
      <div class="input">
        <input type="password" placeholder="Password" required />
        <span class="fade"><i class="fa-solid fa-lock"></i></span>
        <span class="eye"><img src="img/close.jpg" alt="eye" /></span>
      </div>
      <div class="login-wrapper">
        <button type="submit" class="login-btn">ログイン</button>
        <a href="" class="password-forget">パスワードをお忘れの方</a>
      </div>
      <a href="" class="newAccount-btn">新規登録</a>
      <a href="" class="no-login">ログインせずに使う</a>
    </fieldset>
  </form>
</div>