<?php
// エラー表示あり
ini_set('display_errors',1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スケジュール登録</title>
</head>
<body>
    <h1>スケジュール登録</h1>
    <form action="" method="post">
        <label>タイトル</label>
        <input type="text" name="title" >
        <label>場所</label>
        <input type="text" name="place" >
        <label>開始日時</label>
        <input type="date" name="start" id="">
        <label>終了日時</label>
        <input type="date" name="end" id="">
        <input type="checkbox" name="all" id="ckeck-a" value="終日"><label for="check-a">終日</label>
        <input type="checkbox" name="all" id="check-b" value="繰り返し"><label for="check-b">繰り返し</label>
        <button type="submit" >登録する</button>
    </form>
</body>
</html>