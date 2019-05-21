<?php
//p225
require_once("userstudy-c7.Member.php");
$taro = new Member("太朗", 35);
$taro->hello();

//p227
Member::deposit(100);
Member::deposit(150);

echo Member::$piggyBank, "円になりました。\n";
$hana = new Member("花", 21);
$hana->latePenalty();
echo Member::$piggyBank, "円になりました。\n";


?>