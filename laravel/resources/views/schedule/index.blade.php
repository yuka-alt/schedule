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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/login.css">
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