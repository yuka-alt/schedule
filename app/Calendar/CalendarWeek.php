<?php
namespace App\Calendar;

use Carbon\Carbon;

class CalendarWeek {

	protected $carbon;
	protected $index = 0;

	function __construct($date, $index = 0){
		$this->carbon = new Carbon($date);
		$this->index = $index;
	}

	function getClassName(){
		return "week-" . $this->index;
	}

   /**
	 * タイトル
	 */
	public function getTitle(){
		return $this->carbon->format('Y年n月');
	}
/**
	 * カレンダーの曜日を出力する
	 */
	function render(){
		$html = [];
		$html[] = '<div class="calendar">';
		$html[] = '<table class="table">';
		$html[] = '<thead>';
		$html[] = '<tr>';
		$html[] = '<th>月</th>';
		$html[] = '<th>火</th>';
		$html[] = '<th>水</th>';
		$html[] = '<th>木</th>';
		$html[] = '<th>金</th>';
		$html[] = '<th>土</th>';
    $html[] = '<th>日</th>';
		$html[] = '</tr>';
		$html[] = '</thead>';
		$html[] = '<tbody>';
		
		// $weeks = $this->getWeeks();
			$days = $this->getDays();
			foreach($days as $day){
				$html[] = '<td class="'.$day->getClassName().'">';
				$html[] = $day->render();
				$html[] = '</td>';
			}
			$html[] = '</tr>';

		$html[] = '</tbody>';

		$html[] = '</table>';
		$html[] = '</div>';
		return implode("", $html);
	}

	/**
	 * @return CalendarWeekDay[]
	 */
	function getDays(){

		$days = [];

		//開始日〜終了日
		$startDay = $this->carbon->copy()->startOfWeek();
		$lastDay = $this->carbon->copy()->endOfWeek();

		//作業用
		$tmpDay = $startDay->copy();

		//月曜日〜日曜日までループ
		while($tmpDay->lte($lastDay)){

			//前の月、もしくは後ろの月の場合は空白を表示
			if($tmpDay->month != $this->carbon->month){
				$day = new CalendarWeekBlankDay($tmpDay->copy());
				$days[] = $day;
				$tmpDay->addDay(1);
				continue;	
			}
				
			//今月
			$day = new CalendarWeekDay($tmpDay->copy());	
			$days[] = $day;
			//翌日に移動
			$tmpDay->addDay(1);
		}
		
		return $days;
	}
}