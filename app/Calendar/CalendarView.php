<?php
namespace App\Calendar;

use Carbon\Carbon;

class CalendarView {

	private $carbon;

	function __construct($date){
		$this->carbon = new Carbon($date);
	}
	/**
	 * タイトル
	 */
	public function getTitle(){
		return $this->carbon->format('Y年n月');
	}

	/**
	 * カレンダーの日付を出力する
	 */
	function getTimezone(){
		// $html = [];
		// $html[] = '<div class="dating">';
		// $html[] = '<table class="table">';
		// $html[] = '<thead>';
		// $html[] = '<tr>';
    // $html[] = '<th></th>';
		// $html[] = '<th>1</th>';
		// $html[] = '<th>2</th>';
		// $html[] = '<th>3</th>';
		// $html[] = '<th>4</th>';
		// $html[] = '<th>5</th>';
		// $html[] = '<th>6</th>';
		// $html[] = '<th>(土)</th>';
		// $html[] = '</tr>';
		// $html[] = '</thead>';
		// $html[] = '</calendar>';
		// $html[] = '</table>';
		// return implode("", $html);
		return $this->carbon->format('');
	}
	
	function date_timezone_get(){
		$html = [];
		$html[] = '<div class="dating">';
		$html[] = '<table class="table">';
		$html[] = '<thead>';
		$html[] = '<tr>';
    	$html[] = '<th></th>';
		$html[] = '<th>1</th>';
		$html[] = '<th>2</th>';
		$html[] = '<th>3</th>';
		$html[] = '<th>4</th>';
		$html[] = '<th>5</th>';
		$html[] = '<th>6</th>';
		$html[] = '<th>7</th>';
		$html[] = '</tr>';
		$html[] = '</thead>';
		$html[] = '</calendar>';
		$html[] = '</table>';
		return implode("", $html);
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
		
		$weeks = $this->getWeeks();
		foreach($weeks as $week){
			$html[] = '<tr class="'.$week->getClassName().'">';
			$days = $week->getDays();
			foreach($days as $day){
				$html[] = '<td class="'.$day->getClassName().'">';
				$html[] = $day->render();
				$html[] = '</td>';
			}
			$html[] = '</tr>';
		}
		
		$html[] = '</tbody>';

		$html[] = '</table>';
		$html[] = '</div>';
		return implode("", $html);
	}
	
	protected function getWeeks(){
		$weeks = [];

		//初日
		$firstDay = $this->carbon->copy()->firstOfMonth();

		//月末まで
		$lastDay = $this->carbon->copy()->lastOfMonth();

		//1週目
		$week = new CalendarWeek($firstDay->copy());
		$weeks[] = $week;

		//作業用の日
		$tmpDay = $firstDay->copy()->addDay(7)->startOfWeek();

		//月末までループさせる
		while($tmpDay->lte($lastDay)){
			//週カレンダーViewを作成する
			$week = new CalendarWeek($tmpDay, count($weeks));
			$weeks[] = $week;
			
            //次の週=+7日する
			$tmpDay->addDay(7);
		}

		return $weeks;
	}
	
    // $html[] = '<th></th>';
	// 	$html[] = '<th>(日)</th>';
	// 	$html[] = '<th>(月)</th>';
	// 	$html[] = '<th>(火)</th>';
	// 	$html[] = '<th>(水)</th>';
	// 	$html[] = '<th>(木)</th>';
	// 	$html[] = '<th>(金)</th>';
	// 	$html[] = '<th>(土)</th>';
	// 	$html[] = '</tr>';
	// 	$html[] = '</thead>';
	// 	$html[] = '</calendar>';
	// 	$html[] = '</table>';
	// 	return implode("", $html);
	// }

	/**
	 * カレンダーの時間を出力する
	 */
	function time(){
		$html = [];
		$html[] = '<div class="time">';
		$html[] = '<table class="table">';
		$html[] = '<body>';
		$html[] = '<tr>';
    	$html[] = '<td>0:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>1:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>2:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>3:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>4:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>5:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>6:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>7:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>8:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>9:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>10:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>11:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>12:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>13:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>14:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>15:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>16:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>17:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>18:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>19:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>20:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>21:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>22:00</td>';
		$html[] = '<tr>';
		$html[] = '<td>23:00</td>';
		$html[] = '</tr>';
		$html[] = '</body>';
		$html[] = '</table>';
		$html[] = '</div>';
		return implode("", $html);
	}
}