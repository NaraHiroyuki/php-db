<?php
  //p39
 $kakaku = 67;
 $sansu = 72;
 $rika = 85;

 $goukei = $kakaku + $sansu + $rika;

 $heikin = $goukei/3;

 echo "合計:",$goukei,"<br>";
 echo "平均点:",$heikin;
 
 //p41
 const TAX = 0.08;
 $price = 1250 * (1+TAX);
 echo $price;
 
 //p43
 echo "こんにちは","<br>","ありがとう";
 
 //p44
 $msg = "ハローグッパイ";
 print($msg);

 $who = "田中";
 $age = 35;
 print $who."さん。".$age."才";
 
 //p45
 $colors = array('red','blue','green');
 $now = new DateTime();
 print_r($colors);
 print_r($now);

 //p46
 $msg = "おはよう";
 $colors = array("red","blue","green");
 $now = new DateTime();
 $tokuten = 45;
 $isPass = $tokuten>80;
 $userName;
 var_dump($msg);
 var_dump($colors);
 var_dump($now);
 var_dump($tokuten);
 var_dump($isPass);
 var_dump($userName);

 //p51
 $ninzu = "3人" + "2人";
 $price = "500円" * $ninzu;
 $price = $price * "1.08 消費税";
 echo "料金{$price}円、{$ninzu}人";

 $a = 0;
 $b = ++$a;
 echo "\$は{$a}、\$bは{$b}";
 //\$はエスケープシーケンス。

 //p52
 $a = 0;
 $b = $a++;
 echo "\$は{$a}、\$bは{$b}";

 $myNum = "19";
 $myChar = "a";
 ++ $myNum;
 ++ $myChar;
 echo "\$myNumは{$myNum}、\$myCharは{$myChar}";

 //p53
 $num = 19 + 1;
 $msg1 = $num."番";
 $msg2 = $num.'77';
 echo $msg1;
 echo $msg2;

 //p54
 $a = 7;
 $b = 10;
 $hantei1 = $a < $b;
 $hantei2 = $a > $b;
 var_dump($hantei1);
 var_dump($hantei2);

 $point = 11.6;
 if($point >= 10){
   echo '合格';
 }else{
   echo '不合格';
 }

 //p55
 $price = 250 * ($kosu ?? 2 ?? $gusu ?? 6);
 var_dump($kosu);
 echo $price;

 $hantei = "99" == 99;
 var_dump($hantei);

 $hantei = "99" === 99;
 var_dump($hantei);

 //p58
 $a = mt_rand(0,50);
 $b = mt_rand(0,50);
 $bigger = ($a>$b)? $a : $b;
 echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";

 $now = new DateTime();
 $isDate = $now instanceof DateTime;
 var_dump($isDate);


?>