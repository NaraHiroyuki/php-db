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

 //p130
 $msg = "東京<->京都 'Eat & Run'ツアー";
 echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'),"\n";

 //p131(エンコードについて)
 $msg = "<p><b>北原白秋「砂山」</b>海は荒海<br>向こうは佐渡よ</br></P>";
 echo strip_tags($msg),"\n";

 $page = "PHP 7 サンプル.html";
 $path = rawurlencode($page);
 $url = "http://sample.com/{$path}";
 echo $url,"\n";

 //p133(キャストについて)
 function holiday($youbi) {
     if(($youbi == "土曜日") || ($youbi == "日曜日")) {
         echo $youbi, "はお休みです。","\n";
     } else {
         echo $youbi, "はお休みではありません。,\n";
     }
 }

 holiday("金曜日");
 holiday("土曜日");
 holiday("日曜日");

 //p134
 function check($a, $b) {
     if($a == $b) {
         echo "{$a}と{$b}は","同じ。\n";
     } else {
         echo "{$a}と{$b}は","違う。\n";
     }
 }
 
 check("7cm", "7cm");
 check("7km", "7cm");
 check("7人", 7);
 check("PHP7", 7);
 check("七", 0);

 function checks($a, $b) {
     if($a === $b) {
         echo "{$a}と{$b}は","同じ。\n";
     } else {
        echo "{$a}と{$b}は","違う。\n";
     }
 }

 checks("7cm", "7cm");
 checks("7km", "7cm");
 checks("7人", 7);
 checks("PHP7", 7);
 checks("七", 0);

 //p135
 function compare($a, $b) {
     if($a < $b) {
         echo "{$a}、{$b}の順。\n";
     } elseif($a == $b) {
         echo "{$a}と{$b}は同じ。\n";
     } elseif($a > $b) {
         echo "{$b}、{$a}の順。\n";
     }
 }
 compare("apple", "apple");
 compare("apple", "beatles");
 compare("apple", "android");
 compare("apple", "APPLE");

 //p136
 compare("120", 99);
 compare("A5", 0);
 $num = 99;
 compare("A5", (string)$num);

 function compareStr($a, $b) {
     $result = strcmp($a, $b);
     if($result < 0) {
         echo "{$a}、{$b}の順。\n";
     } elseif($result === 0) {
         echo "{$a}と{$b}は同じ。\n";
     } elseif($result >0) {
         echo "{$a}、{$b}の順。\n";
     }
 }

 compareStr("123", 99);
 compareStr("A123", 99);
 compareStr("009", 99);
 compareStr("100", 9);

 //p137
 $id1 = "AB12R";
 $id2 = "ab12r";

 $result = strcasecmp($id1, $id2);
 echo "{$id1}と{$id2}を比較した結果、";
 if($result == 0) {
     echo "一致しました。\n";
 } else {
     echo "一致しません。\n";
 }

 //p138
 function checked($str2) {
     $str1 = "ABC";
     //$str2が$str1で始まっているかどうかをチェックする
     $result = strncasecmp($str1, $str2, strlen($str1));
     echo "{$str2}は";
     if($result == 0) {
         echo "{$result}から始まる。\n";
     } else {
         echo "その他。\n";
     }
 }

 $id1 = "ABCR70";
 $id2 = "xbcM65";
 $id3 = "AbcW71";
 $id4 = "xABC68";
 checked($id1);
 checked($id2);
 checked($id2);
 checked($id3);
 checked($id4);
 
 //p139(文字列の検索)
 function checking($target, $str) {
     $result = mb_strpos($target, $str);
     if($result === false) {
         echo "「{$str}」は「{$target}」には含まれていません。\n";
     } else {
         echo "「{$str}」は「{$target}」の{$result}文字目にあります。\n";
     }
 }
 //if文では0はfalseと判定される
 checking("東京都渋谷区神南","渋谷");
 checking("東京都渋谷区神南","新宿");
 checking("Swift, C++, PHP", "PHP");
 checking("PHP, Swift, C++", "Python");

 //p140
 function check1($target) {
     $result = mb_substr_count($target, "不可");
     if($result >= 3) {
         echo "不可が{$result}個あるので、再試験です。\n";
     } else {
         echo "合格です。\n";
     }
 }

 check1("優","不可","良","可","優","可");
 check1("可,優,不可,不可,良,不可");
 check1("不可,可,不可,不可,良,不可");
 check1("可,良,良,不可,良,不可");

 //p141
 function pickout($target, $str) {
     $result = mb_stristr($target, $str);
     if($result === false) {
         echo "(not found)\n";
     } else {
         echo "{$result}\n";
     }
 }

 pickout("東京都港区赤坂2-3-4","赤坂");
 pickout("東京都渋谷区神南1-1-1","渋谷区");
 pickout("東京都渋谷区道玄坂5-5-5", "原宿");

 $subject = "我輩は猫である。";
 echo str_replace("猫", "犬", $subject),"\n";
 echo str_replace("猫", "馬", $subject),"\n";
 echo $subject,"\n";
 
 //p142
 $subject = "Apple Pie";
 $result = str_ireplace("p", "?", $subject, $count);
 echo "置換前:{$subject}", "\n";
 echo "置換後:{$result}", "\n";
 echo "個数:{$count}", "\n"; 

 //p143
 $search = array("p", "e");
 $subject = "a piece of the apple pie";
 $result = str_ireplace($search, "?", $subject, $count);
 echo "置換前:{$subject}", "\n";
 echo "置換後:{$result}", "\n";
 echo "個数:{$count}", "\n";

 $search = ["鈴木", "35才"];
 $replace = ["A", "x才"];
 $subject = "担当は鈴木さんです。鈴木さんは３５才の男性です。";
 $result = str_replace($search, $replace, $subject);
 echo "置換前:{$subject}", "\n";
 echo "置換後:{$result}", "\n";

 //p144
 $search = ["XG", "P10"];
 $replace = ["XP", "P10a"];
 $subject = "XG90, XG100, P10, P15";
 $result = str_replace($search, $replace, $subject);
 echo "置換前:{$subject}", "\n";
 echo "置換後:{$result}", "\n";

 //146(正規表現の基礎知識)
 $result1 = preg_match("/46-49/u", "確か49-46でした");
 $result2 = preg_match("/46-49/u", "確か46-49でした");
 $result3 = preg_match("/46-49u", "49-46");
 var_dump($result1);
 var_dump($result2);
 var_dump($result3);

 $result1 = preg_match("/4.-49/u", "確か49-46でした");
 $result2 = preg_match("/4.-49/u", "多分46-49だった");
 $result3 = preg_match("/4.-49/u", "41-49かな？");
 var_dump($result1);
 var_dump($result2);
 var_dump($result3);
 
 //p147
 $result1 = preg_match("/4[6-9]-49/u", "確か49-46でした");
 $result2 = preg_match("/4[6-9]-49/u", "多分46-49だった");
 $result3 = preg_match("/4[6-9]-49/u", "41-49かな？");
 var_dump($result1);
 var_dump($result2);
 var_dump($result3);

 //p148
 $filepath = "/googs/image/cat/";
 var_dump(preg_match("/\/image\//u", "$filepath"));
 var_dump(preg_match("#/image/#u", "$filepath"));

 //p149
 $pattern = "/赤の玉/u";
 var_dump(preg_match($pattern, "赤の玉です"));
 var_dump(preg_match($pattern, "青の玉です"));
 var_dump(preg_match($pattern, "赤の箱です"));

 $pattern ="/[赤青緑]の玉/u";
 var_dump(preg_match($pattern, "それは赤の玉です"));
 var_dump(preg_match($pattern, "青の玉が2個です"));
 var_dump(preg_match($pattern, "緑の玉でした"));
 var_dump(preg_match($pattern, "緑の箱でした"));

 //p150
 $pattern = "/[^青赤]木/u";
 var_dump(preg_match($pattern, "大木"));
 var_dump(preg_match($pattern, "青木"));
 var_dump(preg_match($pattern, "赤木"));
 var_dump(preg_match($pattern, "赤木、白木"));

 $pattern = "/[A-F][1-9]/u";
 var_dump(preg_match($pattern, "B8"));
 var_dump(preg_match($pattern, "G7"));
 var_dump(preg_match($pattern, "D6"));
 var_dump(preg_match($pattern, "a2"));
 var_dump(preg_match($pattern, "1A"));

 //p151
 $pattern = "/[A-F]-[0-9]-[0-9a-zA-Z]/u";
 var_dump(preg_match($pattern, "A-5-5"));
 var_dump(preg_match($pattern, "F-9-c"));
 var_dump(preg_match($pattern, "G-17-10"));
 var_dump(preg_match($pattern, "a-2-9"));

 //p152
 $pattern = "/田中..子/u";
 var_dump(preg_match($pattern, "田中佐知子"));
 var_dump(preg_match($pattern, "田中亜希子"));
 var_dump(preg_match($pattern, "田中幸子"));
 var_dump(preg_match($pattern, "田中向日葵子"));

 //p153
 $pattern = "/^山/u";
 var_dump(preg_match($pattern, "山田建設"));
 var_dump(preg_match($pattern, "山本接骨医院"));
 var_dump(preg_match($pattern, "大山観光"));
 var_dump(preg_match($pattern, "藤田商店, 山崎商店"));

 $pattern = "/^山..子$/u";
 var_dump(preg_match($pattern, "山田知子"));
 var_dump(preg_match($pattern, "山本あさ子"));
 var_dump(preg_match($pattern, "山崎貴美"));

 $pattern = "/東京|横浜/u";
 var_dump(preg_match($pattern, "東京タワー"));
 var_dump(preg_match($pattern, "横浜駅前"));
 var_dump(preg_match($pattern, "新東京美術館"));
 var_dump(preg_match($pattern, "東横ホテル"));

 //p154
 $pattern = "/[0-9]{3}-[0-9]{2}/u";
 var_dump(preg_match($pattern, "123-45"));
 var_dump(preg_match($pattern, "090-88"));
 var_dump(preg_match($pattern, "11-222"));
 var_dump(preg_match($pattern, "abc-de"));

 $pattern = "/[a-z]{4,8}/u";
 var_dump(preg_match($pattern, "cycling"));
 var_dump(preg_match($pattern, "marathon"));
 var_dump(preg_match($pattern, "run"));
 var_dump(preg_match($pattern, "SURF"));

 //p155
 $pattern = "/(090|080|070)-{0,1}[0-9]{4}-{0,1}[0-9]{4}/u";
 var_dump(preg_match($pattern, "090-1234-5678"));
 var_dump(preg_match($pattern, "080-1234-5678"));
 var_dump(preg_match($pattern, "07012345678"));
 var_dump(preg_match($pattern, "12345678"));

 $pattern = "/(090|080|070)(-?\d{4}){2}/u";
 var_dump(preg_match($pattern, "090-1234-5678"));
 var_dump(preg_match($pattern, "080-1234-5678"));
 var_dump(preg_match($pattern, "07012345678"));
 var_dump(preg_match($pattern, "12345678"));

 //p156
 $escaped = preg_quote("http://sample.com/php/", "/");
 $pattern = "/{$escaped}/u";
 echo $pattern, "\n";
 var_dump(preg_match($pattern, "URLはhttp://sample.com/php/です"));
 var_dump(preg_match($pattern, "URLはhttp://sample.com/swift/です"));
 
 //p158
 $pattern = "/佐.+子/u";
 $subject = <<< "names"
 佐藤有紀
 佐藤ゆう子
 塩田智子
 杉山香
names;
 $result = preg_match($pattern, $subject, $matches);
 if($result === false) {
     echo "エラー:", preg_last_error();
 } elseif($result == 0) {
     echo "マッチした値はありません。";
 } else {
     echo "「",$matches[0],"」が見つかりました。";
 }

 //p159
 $pattern = "/201[2-5](AX|FX)/i";
 $subject = "2011AX, 2012Fx, 2012AF, 2013FX, 2015ax, 2016Fx";
 $result = preg_match_all($pattern, $subject, $matches);
 if($result === false) {
     echo "エラー:", preg_last_error();
 } elseif($result == 0) {
     echo "マッチした型式はありません。";
 } else {
     echo implode("、", $matches[0]);
 }

 //p160
 $pattern ="/2013([A-F])-(..)/";
 $subject = "2012A-sx, 2013F-fx, 2013G-fx, 2013A-dx, 2015a-sx";
 $result = preg_match_all($pattern, $subject, $matches);
 if($result === false) {
     echo "エラー:", preg_last_error();
 } elseif($result == 0) {
     echo "マッチした型式はありません。";
 } else {
     $all = implode("、", $matches[0]);
     $model = implode("、", $matches[1]);
     $type = implode("、", $matches[2]);
     echo "見つかった型式:{$all}", "\n";
     echo "モデル:{$model}", "\n";
     echo "タイプ:{$type}", "\n";
 }

 //p161
 function numbermask($subject) {
     $pattern = "/^\d{4}\s?\d{4}\s?\d{4}\s?\d{2}(\d{2})s/";
     $replacement = "**** **** **** **$1";
     $result = preg_replace($pattern, $replacement, $subject);
     if(is_null($result)) {
         return "エラー:" . preg_last_error();
     } elseif($result == $subject) {
         return "番号エラー";
     } else {
         return $result;
     }
 }
 $number1 = "1234 5678 9012 3456";
 $number2 = "6543210987654321";
 $num1 = numbermask($number1);
 $num2 = numbermask($number2);
 echo "{$number1}は次のようになります。\n";
 echo $num1, "\n";
 echo "{$number2}は次のようになります。\n";
 echo $num2, "\n";

 //p162
 $pattern = ["/開催日/u", "/開始時間/u"];
 $replacement = ["金曜日", "午後2:30"];
 $subject = "次回は開催日の開始時間からです。";
 $result = preg_replace($pattern, $replacement, $subject);
 echo $result;



?>
