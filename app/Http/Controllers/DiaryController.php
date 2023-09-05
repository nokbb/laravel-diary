<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    //
    /**
     * メイン画面を表示する
     * 
     * @return view
     */
    public function showMain()
    {
        return view('diary.main');
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
}
