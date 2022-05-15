<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力済みデータ</title>
</head>

<body>
  <h1>入力が完了しました！</h1>
</body>

</html>


<?php
// フォーム入力
$name = $_POST['name'];
$age = $_POST['age'];
$place = $_POST['place'];
$job = $_POST['job'];

// 入力時間
$time =  date('Y/m/d H:is');

// ファイルを開く
$file = fopen('data.txt', 'a');

// ファイルに書き込む
fwrite($file, $time . $name . $age . $place . $job . "\n");

// ファイルに保存
fclose($file);

// 以下表示

// ファイルを開く
$openFile = fopen('data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
  echo nl2br($str);
}

// ファイルに保存
fclose($openFile);
