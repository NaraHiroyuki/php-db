<?php
 //p65
 $age = 18;
 if($age < 13) {
     $price = 0;
 } elseif($age <= 15){
     $price = 500;
 } elseif($age <= 19){
     $price = 1000;
 } else {
     $price = 2000;
 }
 echo "{$age}歳なので{$price}円です";

 //66
 $sugaku = 85;
 $eigo = 67;
 if($sugaku >= 60) {
     if($eigo >= 60) {
         echo "おめでとう！合格です！";
     } else {
         echo "残念、不合格です。";
     }
 } else {
     echo "残念、不合格です。";
 }

 if($sugaku >= 60 && $eigo >= 60) {
     echo "おめでとう！合格です！";
 } else {
     echo "残念、不合格です。";
 }

 //p67
 $sex = 'woman';
 $age = 34;
 if($sex == 'woman') {
     if($age >= 30 && $age <= 40) {
         echo '採用です';
     } else {
         echo '30代の方を募集しています。';
     }
 } else {
     echo '女性のみの募集です。';
 }

 //p70
 $color = 'blue';
 switch ($color) {
     case 'green':
       $price = 120;
       break;
     case 'red':
       $price = 140;
       break;
     case 'blue':
       $price = 160;
       break;
     default:
       $price = 100;
       break;      
 }
 echo "{$color}は{$price}円";

 //p71
 $color = 'green';
 switch ($color) {
     case 'green':
     case 'red':
       $price = 140;
       break;
     case 'blue':
       $price = 160;
       break;
     default:
       $price = 100;
       break;    
 }
 echo "{$color}は{$price}円";

 //p74
 $numArray = array();
 while(count($numArray) <5 ) {
     $num = mt_rand(1,30);
     if(! in_array($num,$numArray)) {
         array_push($numArray,$num);
     }
 }
 print_r($numArray);

 //p75
 do {
     $a = mt_rand(1,13);
     $b = mt_rand(1,13);
     $c = mt_rand(1,13);
     $abc = $a + $b + $c;
     if($abc == 21) {
         break;
     }
 }while(TRUE);
 echo "合計が21になる3個の数字。{$a}、{$b}、{$c}";

 //p77
 for ($i= 0;$i<10;$i++) {
     echo "{$i}回";
 }
 
 for ($i=10;$i>0;$i--) {
     echo "{$i}回";
 }

 //p78
 $price = 0;
 for ($kazu=1;$kazu<=6;$kazu++) {
     if($kazu<=3) {
         $price += 1000;
     } else {
         $price += 500;
     }
     echo "{$kazu}人、{$price}円。";
 }

 //p79
 for ($i=0; $i<=3; $i++) {
     for ($j=0; $j<=5; $j++) {
         echo "{$i}-{$j}";
     }
     echo PHP_EOL;
 }

 $list = array(20,-32,50,-5,40);
 $count = count($list);
 $sum = 0;
 for ($i=0; $i<$count; $i++) {
     $value = $list[$i];
     if ($value<0) {
         $sum = "マイナスの値{$value}が含まれていたので中断しました。";
         break;
     } else {
         $sum += $value;
     }
 }
 echo "合計:$sum";

 //p81
 $list = array(20,-32,50,-5,40);
 $count = count($list);
 $sum = 0;
 for ($i=0; $i<$count; $i++) {
     $value = $list[$i];
     if ($value<0) {
         continue;
     }
     $sum += $value;
 }
 echo "合計:{$sum}";
 
 
?>
