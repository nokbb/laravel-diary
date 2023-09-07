@extends('layout')
@section('title', 'メイン')
<header class="header">
  <ul class="header-lists">
    <li class="header-list">
      <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
    </li>
    <li class="header-list">
      <a href=""><i class="fa-solid fa-circle-user"></i></a>
    </li>
    <li class="header-list">
      <a href=""><i class="fa-solid fa-circle-user"></i></a>
    </li>
  </ul>
</header>
<div class="inner">
    <x-alert type="success" :session="session('success')"/>
    <ul>
      <li>
        名前：{{ Auth::user()->name }}
      </li>
      <li>
        メールアドレス：{{ Auth::user()->email }}
      </li>
    </ul>
  <main>
    <div class="my-diary"></div>
    <a class="friend-diary">
      <div class="user-container">
        <div class="user-icon"><i class="fa-solid fa-circle-user"></i></div>
        <p class="user-name">@user_name</p>
        <time datetime="23:15:18">23:15:18</time>
      </div>
      <div class="diary-img">
        <img src="img/open.jpg" alt="#" />
      </div>
      <p class="diary-caption">今日の日常</p>
    </a>
    <div class="camera-btn">
      <input
        type="button"
        onclick="toggleCameraAction()"
        id="camera-action-btn"
      />
    </div>
  </main>
</div>