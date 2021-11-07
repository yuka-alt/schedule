<!--head-->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="スケジュール帳">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
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
          <td colspan="2">
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