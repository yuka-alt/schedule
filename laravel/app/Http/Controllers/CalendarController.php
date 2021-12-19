<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;

class CalendarController extends Controller
{
   public function calendar(Request $request){
		
		$calendar = new CalendarView(time());

		return view('calendar.show', [
			'calendar' => $calendar,
	]);
	}
}