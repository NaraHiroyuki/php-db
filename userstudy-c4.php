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


?>