<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>


<?php
$name  = $_POST["name"];
$mail  = $_POST["mail"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$tel = $_POST["tel"];
$adress = $_POST["adress"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$age.$c.$sex.$c.$tel.$c.$adress;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み、add(追加する、の意味))
fwrite($file, $str."\n"); //ファイルの書き込み、\nは改行
fclose($file); //ファイルを閉じる
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>