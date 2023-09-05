@extends('layout')
@section('title', '新規登録')
<div class="login-inner">
  <form action="" class="login">
    <fieldset>
      <legend class="login-head">SignUp</legend>
      <div class="input">
        <input type="name" placeholder="Name" required>
        <span class="fade"><i class="fa-solid fa-face-smile"></i></span>
      </div>
      <div class="input">
        <input type="userName" placeholder="UserName" required>
        <span class="fade"><i class="fa-solid fa-user"></i></span>
      </div>
      <div class="input">
        <input type="email" placeholder="Email" required>
        <span class="fade"><i class="fa-solid fa-envelope"></i></span>
      </div>
      <div class="input">
        <input type="password" placeholder="Password" required>
        <span class="fade"><i class="fa-solid fa-lock"></i></span>
        <span class="eye"><img src="img/close.jpg" alt="eye"></span>
      </div>
      <div class="input">
        <input type="password" placeholder="PasswordConfirm" required>
        <span class="fade"><i class="fa-solid fa-lock"></i></span>
        <span class="eye"><img src="img/close.jpg" alt="eye"></span>
      </div>
        <button type="submit" class="login-btn">新規登録</button>
        <a href="" class="login-screen">ログイン画面へ</a>
    </fieldset>
  </form>
</div>