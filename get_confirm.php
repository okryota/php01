<?php
$name = $_GET["name"]; //GETの中の要素を収集する。
$mail = $_GET["mail"];
?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前： <?= $name ?>
Mail： <?= $mail ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>