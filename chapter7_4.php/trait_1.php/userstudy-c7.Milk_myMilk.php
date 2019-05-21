<?php
require_once("/Users/narahiroyuki/workspace/php-db/chapter7.php/userstudy-c7.DateTool_Milk.php");

$myMilk = new Milk();
echo "作成日:", $myMilk->theDate;
echo "\n";
echo "期限日:", $myMilk->limitDate;

?>