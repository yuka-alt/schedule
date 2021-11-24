<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\schedule;

class ScheduleController extends Controller
{
    public function month(){
        return view('schedule.1month');
    }
}
