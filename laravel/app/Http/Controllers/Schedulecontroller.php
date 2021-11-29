<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;

class Schedulecontroller extends Controller
{

    /**
     * スケジュール一覧
     */
    public function index(Request $request)
    {
        $schedules = schedule::all();
        return view('schedule.index', [
            'schedules' => $schedules,
        ]);
    }
}
