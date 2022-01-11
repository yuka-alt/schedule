<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;
use App\Calendar\CalendarWeek;

use DateTime;
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
        schedule::create([
            'user_id'=> auth()->id(), 
            'title'=> $request->title,
            'body'=> $request->body, 
            'place'=>$request->place,
            'start'=>$request->start,
            'end'=>$request->end,
            'all'=>$request->all,
            'repeat'=>$request->repeat,
            'starttime'=>$request->starttime,
            'endtime'=>$request->endtime,

        ]);
        // echo 'test'; exit;
        return redirect('/schedules');
    }

    public function create(){
        return view('create');
    }

    public function oneday(Request $request){
        $schedules = $request->user()->schedules()->whereDate('start', $request->date)->get();
        foreach($schedules as &$schedule){
            $schedule->span = $this->span($schedule);
        }
        // 年月日を作成
        $date = new DateTime($request->date);
        // 前日、翌日をセット
        list($yesterday, $tomorrow) = $this->setDate($request->date);
           return view('calendar.oneday', [
            'schedules' => $schedules,
            'date' => $date,
            'yesterday' => $yesterday,
            'tomorrow' => $tomorrow,
        ]);
        return view('oneday');
    }

    public function week(){
        $calendar = new CalendarWeek(time());
        $schedules = schedule::all();
        return view('calendar.week',[
            'schedules' => $schedules,
            'calendar' => $calendar,
        ]);
    }

    public function span($schedule){
        $start= new DateTime($schedule->start);
        $start= $start->format('H');
        $end= new DateTime($schedule->end);
        $end= $end->format('H');
        $span= $end - $start;
        return $span;
    }

    /**
	 * 昨日と明日の年月日をセット
	 * 
	 * @access  public
	 * @param   string  $date  日時カレンダー表示日
	 * @return  array
	 */
	public function setDate($date)
	{
		// 昨日の年月日を作成
		$t = new DateTime($date);
		$yesterday = $t->modify('-1 day')->format('Ymd');
		// 明日の年月日を作成
		$t = new DateTime($date);
		$tomorrow = $t->modify('+1 day')->format('Ymd');
		return array($yesterday, $tomorrow);
	}

}
