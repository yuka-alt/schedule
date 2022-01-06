<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use App\Models\schedule;
use DateTime;

class CalendarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function calendar(Request $request)
	{
		// $requestに値があれば、対象の年月を表示。なければ今月。
		if (empty($request->date)) {
			$t = new DateTime();
			$date = $t->format('Ymd');
		} else {
			$date = $request->date;
		}
		// 対象月の開始日と最終日をセット
		list($start, $end) = $this->setStartEndDate($date);
		// ログインユーザーの対象月のデータを取得
		$schedules = $request->user()->schedules()->whereBetween('start', [$start, $end])->get();
		// カレンダーを作成
		$calendar = new CalendarView($date, $schedules);
		// 前月と当月の値をセット
		list($calendar->previous, $calendar->next) = $this->setDate($date);
		return view('calendar.show', [
			'calendar' => $calendar,
		]);
	}

	/**
	 * 前月と来月の年月をセット
	 * 
	 * @access  public
	 * @param   string  $date  月次カレンダー表示年月
	 * @return  array
	 */
	public function setDate($date)
	{
		// 前月の年月日を作成
		$t = new DateTime($date);
		$previous = $t->modify('-1 months')->format('Ymd');
		// 来月の年月日を作成
		$t = new DateTime($date);
		$next = $t->modify('+1 months')->format('Ymd');
		return array($previous, $next);
	}

	/**
	 * 対象月の開始日と最終日をセット
	 * 
	 * @access  public
	 * @param   string  $date  対象年月日
	 * @return  array
	 */
	public function setStartEndDate($date)
	{
		$t = new DateTime('first day of ' . $date);
		$start = $t->format('Ymd');
		$t = new DateTime('last day of ' . $date);
		$end = $t->format('Ymd');
		return array($start, $end);
	}
}