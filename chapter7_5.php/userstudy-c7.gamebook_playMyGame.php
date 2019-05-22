<?php
require_once("/Users/narahiroyuki/workspace/php-db/chapter7_5.php/userstudy-c7.gamebook_MyGame.php");

$myPlayer = new MyGame();
for ($i=0; $i<10;$i++) {
    $myPlayer->play();
    if (! $myPlayer->isAlive()) {
        break;
    }
}
echo "ゲーム終了", "\n";
?>