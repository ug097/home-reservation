<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    // 予定表
    public function schedule(){
        return view('schedule');
    }
}
