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
      //  $schedules = Schedule::orderBy('created_at', 'asc')->get();
        $schedules = schedule::all();
        //dd($schedule);
        return view('schedule.index', [
            'schedules' => $schedules,
        ]);
    }
}
