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
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    
</head>
    <h1>スケジュール登録</h1>
    <form action="{{ url('store') }}" method="post">
        {{ csrf_field() }}
        <ul>
            <li>
                <label>タイトル</label>
                <input type="text" name="title" >
            </li>
            <li>
                <label>場所</label>
                <input type="text" name="place" >
            </li>
            <li>
                <label>開始日時</label>
                <input type="datetime-local" name="start" id="">
            </li>
            <li>
                <label>終了日時</label>
                <input type="datetime-local" name="end" id="">

            </li>
            <li>
                <input type="checkbox" name="all" id="ckeck-a" value="1"><label for="check-a">終日</label>
            </li>
            <li>
                <input type="checkbox" name="repeat" id="check-b" value="1"><label for="check-b">繰り返し</label>
            </li>
            <li>
                <input type="submit" value="登録する">
                <button>
                    <a href="/calendar">戻る</a>
                </button>

            </li>
        </ul>
    </form>
@endsection
