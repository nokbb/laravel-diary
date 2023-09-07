@extends('layout')
@section('title', 'マイページ')
<header class="header">
  <ul class="header-lists">
    <li class="header-list">
      <a href=""><i class="fa-solid fa-chevron-left"></i></a>
    </li>
    <li class="header-list">
      <a href=""><i class="fa-solid fa-circle-user"></i></a>
    </li>
    <li class="header-list memory-meatball-menu">
      <a href=""><i class="fa-solid fa-ellipsis"></i></a>
    </li>
  </ul>
</header>
<main>
  <div class="modal-container">
    <div class="modal-body" id="login">
      <a href="login.html" class="login-menu">
        <p class="menu-text">ログイン</p>
        <span class="menu-icon"
          ><i class="fa-solid fa-right-to-bracket"></i
        ></span>
      </a>
      <a href="signup.html" class="signup-menu">
        <p class="menu-text">新規登録</p>
        <span class="menu-icon"
          ><i class="fa-solid fa-circle-plus"></i
        ></span>
      </a>
    </div>
    <div class="modal-body">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <div class="edit-menu">
          <input type="submit" id="logout" name="logout" value="ログアウト" />
          <label for="logout"><i class="fa-solid fa-pen-to-square"></i></label>
        </div>
      </form>
        <div class="delete-menu">
          <input type="submit" id="myPage-edit" value="編集" />
          <label for="myPage-edit"><i class="fa-solid fa-trash"></i></label>
        </div>
    </div>
  </div>
  <a href="mypage-edit.html" class="myPage">
    <div class="myPage-img">
      <img src="img/タロキチ.jpg" alt="myPage" />
    </div>
    <h2 class="myName">タロキチ</h2>
    <h3 class="myUserName">@user_name</h3>
  </a>
  <ul class="tab-area">
    <li class="tab active">○</li>
    <li class="tab">△</li>
    <li class="tab">□</li>
  </ul>
  <div class="inner">
    <div class="panel-area">
      <div class="panel active">
        <div class="private">
          <span class="lock-open"
            ><i class="fa-solid fa-lock-open"></i
          ></span>
          <span class="lock"><i class="fa-solid fa-lock"></i></span>
          <label for="toggle" class="toggle-button">
            <input type="checkbox" id="toggle" />
            <div class="slider"></div>
          </label>
        </div>
        <div class="memories-container">
          <table class="memories">
            <tr class="day">
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
            </tr>
            <tr class="day">
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
            </tr>
          </table>
          <div class="seeAll-container">
            <a href="memories.html" class="seeAll-btn"
              >全てのメモリーを見る</a
            >
          </div>
        </div>
      </div>

      <div class="panel">
        <div class="private">
          <span class="lock-open"
            ><i class="fa-solid fa-lock-open"></i
          ></span>
          <span class="lock"><i class="fa-solid fa-lock"></i></span>
          <label for="toggle1" class="toggle-button">
            <input type="checkbox" id="toggle1" />
            <div class="slider"></div>
          </label>
        </div>
        <div class="memories-container">
          <table class="memories">
            <tr class="day">
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
            </tr>
            <tr class="day">
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
            </tr>
          </table>
          <div class="seeAll-container">
            <a href="memories.html" class="seeAll-btn"
              >全てのメモリーを見る</a
            >
          </div>
        </div>
      </div>

      <div class="panel">
        <div class="private">
          <span class="lock-open"
            ><i class="fa-solid fa-lock-open"></i
          ></span>
          <span class="lock"><i class="fa-solid fa-lock"></i></span>
          <label for="toggle2" class="toggle-button">
            <input type="checkbox" id="toggle2" />
            <div class="slider"></div>
          </label>
        </div>
        <div class="memories-container">
          <table class="memories">
            <tr class="day">
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
            </tr>
            <tr class="day">
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
            </tr>
          </table>
          <div class="seeAll-container">
            <a href="memories.html" class="seeAll-btn"
              >全てのメモリーを見る</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</main>