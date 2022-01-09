<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\schedule;

/**
 * test
 */

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $schedules = Schedule::orderBy('created_at', 'asc')->get();
        return view('schedule.index', [
            'schedules' => $schedules,
        ]);
    }


    //
    // 月を変える（１ヶ月のカレンダー）
    function moveMonth($ym)
    {

        // １ヶ月のカレンダーの日付を作成



        // 対象の月のスケジュールをデータベースから取得する

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
