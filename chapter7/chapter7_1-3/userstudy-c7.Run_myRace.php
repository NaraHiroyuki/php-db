<?php
require_once("userstudy-c7.Player_Run.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Soccerクラスを利用する</title>
</head>
<body>
<?php
   // Runnerクラスのインスタンスを作る
   $runner1 = new Runner("福士", 23);
   // オーバーライトしたwho()を試す
   $runner1->who();
?>
</pre>
</body>
</html>
?>