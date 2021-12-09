<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\schedule;

//class ScheduleController extends Controller
//{
//    public function month(){
//        return view('schedule.month');
//    }
//}

use App\Calendar\CalendarView;

class ScheduleController extends Controller
{
   public function month(){
		
		$calendar = new CalendarView(time());

		return view('calendar.calendar', [
			"calendar" => $calendar
		]);
	}
}