<!--head-->
<?php
// エラー表示あり
ini_set('display_errors',1);
// 日本時間に設定
date_default_timezone_set('Asia/Tokyo');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="スケジュール帳">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="/Users/shunyaamaike/team_schedule/laravel/resources/views/schedule/login.css">
  <title>スケジュール帳</title>
</head>

<!--ログイン画面-->
<body>
    <h1>スケジュール</h1>
  <div class="login">
    <table>
      <form action="login.html" method="get"></form>
        <tr>
          <th>ID</th>
            <td>
              <input type="text" name="id" id="" size="24">
            </td>
        </tr>
        <tr>
          <th>パスワード</th>
            <td>
              <input type="password" name="password" id="" size="24">
            </td>
        </tr>
        <tr>
          <td class="2">
            <input type="submit" value="ログイン">
          </td>
        </tr>
    </table>
  </div>
</body>
</html>

<!-- スケジュール一覧表示 -->
@if (count($schedules) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        <!--test-->
    </div>
 
    <div class="panel-body">
        <table class="table table-striped schedule-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th> <!--test--></th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($schedules as $schedule)
                <tr>
                    <!-- タスク名 -->
                    <td class="table-text">
                    </td>
 
                    <td>
                        <!-- TODO: 削除ボタン -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif