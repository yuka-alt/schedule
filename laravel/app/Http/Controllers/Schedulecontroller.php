<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\schedule;

class Schedulecontroller extends Controller
{

    /**
     * コンストラクタ
     */
    public function _construct()
    {
        $this->middIeware('auth');
    }

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

    /**
     * スケジュール登録
     */
    //public function store(Request $request)
    //{
    //    $this->validate($request,[
    //        'data' => 'requiredmax:255',
    //    ]);

        //スケジュール作成
        
    //}

    /**
     * スケジュール削除
     */

    public function destroy(Request $request, Schedule $schedule)
    {
        $this->authorize('destroy', $schedule);
        $schedule->delete();
        return redirect('/schedules');
    }
}
