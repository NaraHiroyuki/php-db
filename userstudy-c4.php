<?php
 //p85
 for ($i=1; $i<=10; $i++) {
     $num = mt_rand(1,100);
     echo "$num,";
 }

 //p86
 $kyori = 20;
 $kakudo = 32 * pi()/180;
 $takasa = $kyori * tan($kakudo);
 $takasa = round($takasa*10)/10;

 echo "木の高さは{$takasa}mです。";

 //p87,p88
 function double($n) {
     $result = $n * 2;
     return $result;
 }
 $ans = double(125);
 echo $ans;

 function price ($tanka,$kosu) {
     $souryo = 250;
     $ryoukin = $tanka * $kosu;
     if ($ryoukin<5000) {
         $ryoukin += $souryo;
     }
     return $ryoukin;
 }
 $total = price(500,20);
 echo $total;

 //p89
 function prices($tanka,$kosu) {
     $souryo = 250;
     $ryoukin = $tanka * $kosu;
     if ($ryoukin<5000) {
         $ryoukin += $souryo;
     }
     return $ryoukin;
 }

 $kingaku1 = prices(2400,2);
 $kingaku2 = prices(1200,5);
 echo $kingaku1;
 echo PHP_EOL;
 echo $kingaku2;
 
 //p91
 function warikan($total,$ninzu) {
     if ($ninzu<=0) {
         return;
     }
     $result = $total/$ninzu;
     echo "{$total}円を{$ninzu}人で分けると{$result}円。";
     echo "<br>".PHP_EOL;
 }
 warikan(2500,2);
 warikan(3000,0);
 warikan(5500,4);

 //p92
 function charge($rank,$days=1) {
     switch ($rank) {
         case "A":
           $ryoukin = 15000 * $days;
           break;
         case "B":
           $ryoukin = 12000 * $days;
           break;
         default:
           $ryoukin = 8000 * $days;
           break;  
     }
     return $ryoukin;
 }

 $kingaku1 = charge("B",2);
 $kingaku2 = charge("A");
 
 echo "金額1は{$kingaku1}円"."<br>".PHP_EOL;
 echo "金額2は{$kingaku2}円";

 

 //p94
 function team ($name,...$members) {
     $list = implode("、",$members);
     return "{$name}:{$list}";
 }

 $team1 = team("Peach","佐藤","田中","加藤");
 $team2 = team("カボス","ひろし","きえこ");
 echo $team1 . "<br>" . PHP_EOL;
 echo $team2;

 //p95
 function twice (float $var):int {
     $var *= 2;
     return $var;
 }

 $num = 10.8;
 $result = twice($num);
 echo "{$num}の2倍は",$result;

 //p97
 $kosu = 2;

 function priced() {
     $ryoukin = 250 * $kosu;
     echo "{$ryoukin}円です。";
 }

 echo "{$ryoukin}個で";
 priced();

 //p98
 $tax = 0.08;

 function taxPrice($tanka, $kosu) {
     global $tax;
     $ryoukin = $tanka * $kosu * (1+$tax);
     echo "{$ryoukin}円です。";
 }

 taxPrice(250,4);
 echo "税込" . $tax*100 , "%";

 //p99
 function countUp() {
     static $count = 0;
     $count += 1;
     return $count;
 }

 for($i=1; $i<=10; $i++) {
     $num = countUp();
     echo "{$num}回目。";
 }

 //p100
 function oneUp (&$var) {
      $var ++;
 }

 $num = 5;
 oneUp($num);
 echo $num;

 //p102
 function myFunc() {
     $allArgs = func_get_args();

     $total = array_sum($allArgs);

     $numArgs = func_num_args();
     
     if ($numArgs>0) {
         $average = $total/$numArgs;
         $lastValue = func_get_arg($numArgs-1);
     } else {
         $lastValue = $average = $total = '(データなし)';
     }
     
     echo "合計点",$total,"\n";
     echo "平均点",$average,"\n";
     echo "最後の点数",$lastValue,"\n";
 }

 myFunc(43,67,55,75);

 $color = "red";
 $$color = 125;
 echo $red;

 //p103
 $unitPrice = 230;
 $quantity = 5;
 
 $tanka = "unitPrice";
 $kosu = "quantity";
 
 $ryoukin = $$tanka * $$kosu;
 echo $ryoukin . "円";

 //p104
 function hello($who) {
     echo "{$who}さん、こんにちは！";
 }

 function bye($who) {
     echo "{$who}さん、さよなら！";
 }

 $msg = "bye";
 if (function_exists($msg)) {
     $msg("金太郎");
 }

 $myFunc = function ($who) {
     echo "{$who}さん、こんにちは！";
 };//代入文なのでセミコロンが必要

 $myFunc("田中");

 //p105
 $msg = "ありがとう";
 $myFunc = function ($who) use ($msg) {
     echo "{$who}さん、" . $msg;
 };

 $myFunc("田中");

 $msg = "さようなら";
 

?>