<?php

function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}

$name = $_POST["name"]; //POSTの中の要素を収集する。
$mail = $_POST["mail"];
$age = $_POST("age");
$sex = $_POST("sex");
$tel = $_POST("tel");
$adress = $_POST("adress");


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前: <?= h($name) ?>
EMAIL: <?= h($mail) ?>
生年月日: <?= h($age) ?>
性別: <?= h($sex) ?>
電話番号: <?= h($tel) ?>
住所: <?= h($adress) ?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>