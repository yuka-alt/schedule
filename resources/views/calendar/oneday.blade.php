<!DOCTYPE html>
<html lang="ja">
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
<body>
    <h1>1dayスケジュール</h1>

    <div class="day">
        ○月○日
    </div>
    
    <p>----ここから第一段階----</p>
    <p>まずは、こんな感じの表示にしたいというHTMLを作成する</p>
    <table border="1">
      <tr>
        <th colspan="4">12月22日（wed）</th>
      </tr>
      <tr>
        <td>08:00</td>
        <td rowspan="2">予定１</td>
        <td rowspan="3">予定２</td>
      </tr>
      <tr>
        <td>09:00</td>
        <td rowspan="3">予定３</td>
      </tr>
      <tr>
        <td>10:00</td>
      </tr>
      <tr>
        <td>11:00</td>
      </tr>
      <tr>
        <td>12:00</td>
      </tr>
      <tr>
        <td>13:00</td>
        <td rowspan="2">予定４</td>
      </tr>
      <tr>
        <td>14:00</td>
      </tr>
    </table>
​
    <p>----ここから第二段階----</p>
    <p>bladeファイルに変数を割り当てる。可能な部分は繰り返し処理も入れてみる。</p>
    <table border="1">
      <tr>
        <th colspan="4">12月22日（wed）</th>
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
<style>
  table {
    border-collapse: collapse;
  }
</style>


</body>
</html>