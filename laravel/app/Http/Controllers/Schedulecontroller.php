<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $schedules = Schedule::orderBy('created_at', 'asc')->get();
    //     return view('schedules.index', [
    //         'schedules' => $schedules,
    //     ]);
    // }

    public function month(){
		
		$calendar = new CalendarView(time());

		return view('calendar.calendar', [
			"calendar" => $calendar
		]);
	}

    //
    // 月を変える（１ヶ月のカレンダー）
    function moveMonth($ym)
    {
        if (isset($_GET['ym'])) {
            $ym = $_GET['ym'];
        } else {
            // 今月の年月を表示
            $ym = date('Y-m');
        }


    }

    //　週を変える（週のカレンダー）


    // 日を変える（一日の予定表）



    // 予定を登録する
    function registSchedule()
    {

        $date = '2021-11-24';
        $memo = '仕事する';

        // 登録する


    }
    //

    /**
     * スケジュール一覧
     */
    public function index(Request $request)
    {
        $schedules = schedule::all();
        return view('schedule.index', [
            'schedules' => $schedules,
            // 'test' => 'amaike',
        ]);
    }
    
    /**
     * スケジュール登録
     */
    public function store(Request $request)
    {
        // var_dump(auth()->id());
        // exit;
        schedule::create([
            'user_id'=> auth()->id(), 
            'title'=> $request->title,
            'body'=> $request->body, 
        ]);
        // echo 'test'; exit;
        return redirect('/schedules');
    }

    public function register(){
        return view('register');
    }

    public function oneday(){
        return view('oneday');
    }
}
