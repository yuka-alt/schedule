@extends('layouts.app')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/oneday.css') }}" rel="stylesheet">
    <title>1dayスケジュール</title>
</head>
<div class="calendar">
    <table border="1">
        <tr>
            <th colspan="4" class="dayly-title">
            <a href="/calendar/{{ $date->format('Ymd') }}">月次</a>
            <a href="/oneday/{{ $yesterday }}">昨日</a>
            {{ $date->format('Y年n月j日') }}
            <a href="/oneday/{{ $tomorrow }}">明日</a>
            </tr>
        <!-- 「4」のところは変数にできるとなおよし。コントローラーで作成して、変数をセットする
        日付はコントローラから送られてきた変数でセット。 -->
        </tr>
      <!-- 0:00から24:00までの繰り返し処理 -->
        @for ($i = 0; $i < 24; $i++)
            <tr>
                <td>{{ $i }}:00</td>
                @foreach($schedules as $schedule)
                    @if ($i == $schedule->start->format('H') )
                        <td rowspan="{{ $schedule->span }}">{{$schedule->title}}</td>
                        <!-- rouspanstatとendの時間を引き算させる -->
                    @endif
                @endforeach
            </tr>
        @endfor
      <!-- <tr></tr>タグのかたまりを繰り返し処理で作成する。 -->
    </table>
</div>
@endsection