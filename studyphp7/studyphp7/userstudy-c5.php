<?php
 //p108
 $theSize = "M";
 $thePrice = 1200;
 $msg = "$theSize サイズ、$thePrice 円";
 echo $msg,"\n";

 $theSize = "M";
 $thePrice = 1200;
 $msg = "{$theSize}サイズ、{$thePrice}円";
 echo $msg,"\n";

 //p109
 $yen = 117;
 echo "今日のレートは、\$1 = $yen 円です。","\n";

 //p110
 $theSize = "M";
 $thePrice = 1200;
 $msg = '$theSize サイズ、$thePrice 円';
 echo $msg,"\n";

 //p111
 $msg = 'そこは Y\'s ROOM です。';
 echo $msg,"\n";

 $msg = 'そこは "Y\'s ROOM" です。';
 echo $msg,"\n";

 //p112
 $version = 7;
 $msg = <<< "EOM"
 これから一緒に"PHP $version "を学びましょう。
 本気出すよ。
EOM;

 echo $msg,"\n";

 $version = 7;
 $msg = <<< 'EOM'
 これから一緒に"PHP $version "を学びましょう。
 本気出すよ。
EOM;

 echo $msg,"\n";

 //113
 echo M_PI,"\n";
 printf('%.3f',M_PI);
 echo "\n";

 //p114
 printf('円周率は%.2fです。',M_PI);
 echo "\n";

 $a = 15.69;
 $b = 11.32;
 printf('最大値%.1f、最小値%.1f', $a, $b);
 echo "\n";

 $format = '最大値%.1f、最小値%.1f';
 $a = 15.69;
 $b = 11.32;
 printf($format, $a, $b);
 echo "\n";

 $a = -5;
 $b = 9;
 printf('%+d',$a);
 echo "、";
 printf('%+d',$b);
 echo "\n";

 //p116
 $a = 7;
 $b = 2380;
 printf('番号は%03dです。', $a);
 printf("請求額%'*6d円", $b); 
 echo "\n";

 $year = 1987;
 $month = 3;
 $day = 9;
 printf('%04d-%02d-%02d', $year, $month, $day);
 echo "\n";

 $a = "23ab";
 printf("IDは%'#-8sです。", $a);
 printf("IDは%'*+8sです。", $a);
 echo "\n";

 //p117
 $a = 83;
 $b = 92018;
 $c = "3-A";
 printf('番号は%04dです。', $a);
 printf('番号は%04dです。', $b);
 printf('IDは%04sです。', $c);
 echo "\n";

 $a = 10.2582;
 $b = 3.1;
 $c = "Hypertext Preprocessor!";
 printf('結果は%.2fです。', $a);
 printf('結果は%.02fです。', $b);
 printf('PHPは%.5s...',$c);
 echo "\n"; 

 //p118
 $per = 64.8;
 printf('達成率は%.2f%%です。', $per);
 echo "\n";

 //p119
 $year = 2016;
 $seq = 539;
 $type = "P7";
 $id = sprintf('%04d%06d-%s', $year, $seq, $type);
 echo "製品IDは",$id,"です";
 echo "\n";

 $max = 15.69;
 $min = 11.32;
 $ave = 13.218;
 $data = array($max, $min, $ave);
 $format = '最大値%.1f、最小値%.1f、平均値%.1f';
 vprintf($format, $data);
 echo "\n";

 //p120
 $price = 1980 * 2;
 $kingaku = number_format($price);
 echo $kingaku,"円";
 echo "\n";

 //p121
 function price($str) {
     $kakaku = 3000;
     $length = mb_strlen($str);
     if ($length>10) {
         $kakaku += ($length - 10)*100;
     }
     $kakaku = number_format($kakaku);
     $result = "{$length}文字 {$kakaku}円";
     return $result;
 } 

 $msg1 = "Hello World";
 $msg2 = "ハローワールド";
 echo price($msg1),"\n";
 echo price($msg2),"\n";

 //p122
 $msg = "我輩は猫である。名前はまだない。";
 echo mb_strlen($msg),"\n";
 echo mb_substr($msg, 4),"\n";
 echo mb_substr($msg, 4, 10),"\n";
 echo mb_substr($msg, -6),"\n";

 $msg = "春はあけぼの。";
 $msg = mb_substr($msg, 0, -1);
 echo $msg,"\n";

 //p123
 $id = "ABC1X239JP";
 echo substr($id, 4),"\n";
 echo substr($id, 5, 3),"\n";
 echo substr($id, -2),"\n";

 $id = "peace";
 $length = strlen($id);
 for ($i=0; $i<$length; $i++) {
     $chr = $id{$i};
     echo "{$i}-",$chr,"\n";
 }
 
 //124
 $msg = "HELLO! PHP７を始めよう。";
 echo mb_convert_kana($msg,"as"),"\n";

 $msg = "Hello! PHP7を始めよう。";
 echo mb_convert_kana($msg,"AS"),"\n";

 $yomi = "ふじのさぶろう";
 $hankaku_katakana = mb_convert_kana($yomi,"h");
 $zenkaku_katakana = mb_convert_kana($yomi,"c");
 echo $hankaku_katakana,"\n";
 echo $zenkaku_katakana,"\n";

 //p126
 $yomi1 = "ｽｺｯﾄ･ﾗﾌｧﾛ";
 $yomi2 = "チャーリー・ミンガス";
 $hiragana1 = mb_convert_kana($yomi1, "HcV");
 $hiragana2 = mb_convert_kana($yomi2, "HcV");
 echo $hiragana1,"\n";
 echo $hiragana2,"\n";

 //p127
 $yomi1 = "ﾌｼﾞﾔﾏｻｸﾗ";
 $yomi2 = "あしがらきんたろう";
 $hiragana1 = mb_convert_kana($yomi1, "KCV");
 $hiragana2 = mb_convert_kana($yomi2, "KCV");
 echo $hiragana1,"\n";
 echo $hiragana2,"\n";

 $msg = "Apple iphone";
 echo strtoupper($msg),"\n";

 $msg = "Apple iPhone";
 echo strtolower($msg),"\n";

 //p128
 $msg = "THE QUICK BROWN FOX";
 echo ucwords(strtolower($msg));

 $msg = "\tHello World!!  \n\n";
 $result = trim($msg);
 echo "処理前:\n";
 echo "[",$msg,"]\n";
 echo "処理後:\n";
 echo "[",$result,"]\n";

 //p129
 $msg = " 東京都千代田区 \n\n";
 $result = trim($msg, "\x20\t\n\r\0\v   ");
 echo "処理前:\n";
 echo "[",$msg,"]\n";
 echo "処理後:\n";
 echo "[",$result,"]\n";

 



?>