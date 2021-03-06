<?php
namespace App\Calendar;

use Carbon\Carbon;

class CalendarView {

	private $carbon;

	function __construct($date, $schedules) {
		$this->carbon = new Carbon($date);
		$this->schedules = $schedules;
	}
	/**
	 * タイトル
	 */
	public function getTitle(){
		return $this->carbon->format('Y年n月');
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
				$d='';
				$html[] = '<td class="'.$day->getClassName().'">';
				$html[] = '<form action="/oneday/'.$this->carbon->format('Ym').$d.'"method="get">';

				if ($day->render() !='') {
					$d = $day->carbon->format('j');
					// 対象日のスケジュールがあればボタンを設置
					// デフォルト値をセット
					$day_tag = $day->render();
					foreach($this->schedules as $schedule){
					// todo endの日付も比較したいが、endのオブジェクトがうまく取れない
						if ($schedule->start->format('j') == $d) {
							// 条件に見合うデータがあればボタン設置
							$day_tag = '<input type= submit value= "'.$d.'">';
							// 余計な繰り返しをさせない
							continue;
						}
					}
					$html[]= $day_tag;
				}
				$html[] = '<input type=hidden name= "date" value= "'.$this->carbon->format('Ym').$d.'">';
				$html[] = '</form>';
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