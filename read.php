<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo  nl2br($str); // nl2br() ... 改行文字を追加
}
fclose($file); // ファイルを閉じる
?>

<html>
・
・
・
<body>

<table width="80%" border="1">
 <tr>
  <th scope="col">登録日時</th>
  <th scope="col">お名前</th>
  <th scope="col">EMAIL</th>
  <th scope="col">生年月日</th>
  <th scope="col">性別</th>
  <th scope="col">電話番号</th>
  <th scope="col">住所</th>
 </tr>
 <?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo  nl2br($str); // nl2br() ... 改行文字を追加
}
fclose($file); // ファイルを閉じる
?>

 <?php
 while($file = mysql_fetch_assoc($file)) {
 ?>
 <tr>
  <td><?php print(htmlspecialchars($file['time'])); ?> </td>
  <td><?php print(htmlspecialchars($file['name'])); ?> </td>
  <td><?php print(htmlspecialchars($file['mail'])); ?> </td>
  <td><?php print(htmlspecialchars($file['age'])); ?> </td>
  <td><?php print(htmlspecialchars($file['sex'])); ?> </td>
  <td><?php print(htmlspecialchars($tel['tel'])); ?> </td>
  <td><?php print(htmlspecialchars($adress['adress'])); ?> </td>
 </tr>
 <?php
 }
 ?>
 </table>
</body>
</html>

<table>
<?php
$file = fopen('data/data.txt', 'r');        

while(!feof($file)){
    $line = fgets($file);
    if (trim($line) != null){
        list($name,$mail,$age,$sex,$tel,$adress) = explode("\t",$line);
        print "<tr>\n";
        print "<td>$name</td><td>$mail</td><td>$age</td>";
        print "<td>$sex</td><td>$tel</td><td>$adress</td>\n";
        print "</tr>\n";
    }
}
fclose($file);
?>
</table>

<?php
require('data/data.txt');

$recordset = mysql_query('select * from shop_item order by id asc');
?>

