<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    //
    /**
     * ホーム画面を表示する
     * 
     * @return view
     */
    public function showHome()
    {
        return view('diary.home');
    }

    //
    /**
     * カメラ画面を表示する
     * 
     * @return view
     */
    public function showCamera()
    {
        return view('diary.camera');
    }

    //
    /**
     * マイページ画面を表示する
     * 
     * @return view
     */
    public function showMypage()
    {
        return view('diary.mypage');
    }
}
