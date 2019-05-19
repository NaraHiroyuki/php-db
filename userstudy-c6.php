<?php
 //p165(配列を作る)
 $teamA = ["赤井一郎","伊藤五郎","上野信二"];
 echo $teamA[0], "さん\n";
 echo $teamA[1], "さん\n";
 echo $teamA[2], "さん\n";

 //p166
 $teamA = ["赤井一郎","伊藤五郎","上野信二"];
 $teamA[1] = "石丸四郎";
 echo $teamA[0], "さん\n";
 echo $teamA[1], "さん\n";
 echo $teamA[2], "さん\n";

 $teamA = ["赤井一郎","伊藤五郎","上野信二"];
 for($i=0;$i<count($teamA);$i++) {
     echo $teamA[$i], "さん\n";
 }

 //p167
 $teamA = ["赤井一郎","伊藤五郎","上野信二"];
 $teamB = ["江藤幸代","小野幸子"];
 function teamList($teamname, $namelist) {
     echo "{$teamname}", "\n";
     for($i=0;$i<count($namelist);$i++) {
         echo $namelist[$i],"\n";
     }
 }
 teamList('Aチーム', $teamA);
 teamList('Bチーム', $teamB);

 //168
 $colors = array("赤","青","黄色");
 print_r($colors);

 //p169
 $colors = [];
 $colors[] = "赤";
 $colors[] = "青";
 $colors[] = "黄";
 $colors[] = "白";
 print_r($colors);

 $colors = [];
 $colors[0] = "赤";
 $colors[1] = "青";
 $colors[5] = "黄";
 $colors[] = "白";
 print_r($colors);

 //p171
 $goods = [
     "id" => "R56",
     "size" => "M",
     "price" => 2340
 ];
 print_r($goods);

 $goods = [
    "id" => "R56",
    "size" => "M",
    "price" => 2340
];
echo "id:".$goods["id"]."\n";
echo "サイズ:".$goods["size"]."\n";
echo "価格:".number_format($goods["price"])."円\n";

//172
$goods = [
    "id" => "R56",
    "size" => "M",
    "price" => 2340
];
$goods['price'] = 3500;
echo "id:".$goods["id"]."\n";
echo "サイズ:".$goods["size"]."\n";
echo "価格:".number_format($goods["price"])."円\n";

$user = [];
$user['name'] = "井上萌";
$user['yomi'] = "いのうえもえ"; 
$user['age'] = 28;
print_r($user); 

//p173
$data = "赤井一郎,伊藤淳,上野信二";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);

//p174
$data = ["赤井一郎","伊藤淳","上野信二"];
$glue = "さん、";
$nameList = implode($glue, $data);
$nameList .= "さん";
print_r($nameList);

//配列を定数にする
define("RANK",["松","竹","梅"]);
echo RANK[1];

//175
$myArray =["a","b","c","d","e"];
$removed = array_splice($myArray,1,2);
echo '実行後:$myArray',"\n";
print_r($myArray);
echo '戻り:$removed',"\n";
print_r($removed);

//p176
$myArray =["a" => 10,"b" => 20,"c" => 30,"d" => 40,"e" =>50];
$removed = array_splice($myArray,1,2);
echo '実行後:$myArray',"\n";
print_r($myArray);
echo '戻り:$removed',"\n";
print_r($removed);

//177
$myArray =["a","b","c","d"];
$removed = array_shift($myArray);
echo '実行後:$myArray',"\n";
print_r($myArray);
echo '戻り:$removed',"\n";
print_r($removed);
echo "\n";

//p178
$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 3, $replace);
echo '実行後:$myArray',"\n";
print_r($myArray);
echo '戻り:$removed',"\n";
print_r($removed);

$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 0, $replace);
echo '実行後:$myArray',"\n";
print_r($myArray);
echo '戻り:$removed',"\n";
print_r($removed);

//p179
$a = ["a", "b", "c"];
$b = ["d", "e", "f", "g", "h"];
$result = $a + $b;
print_r($result);

//180
$a = ["a", "b", "c"];
$b = ["d", "e", "f"];
$c = ["g", "h", "i"];
$result = array_merge($a, $b, $c);
print_r($result);

$a = ["a" => 1, "b" => 2, "c" =>3];
$b = ["b" => 40, "d" => 50];
$result = array_merge($a, $b);
print_r($result);

//p181
$a = ["a" => 1, "b" => 2, "c" =>3];
$b = ["b" => 40, "d" => 50];
$result = array_merge_recursive($a, $b);
print_r($result);

//p182
$point = ["10km", "20km", "30km", "40km", "goal"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
$result = array_combine($point, $split);
print_r($result);

$a = ["green", "red", "blue"];
$b = ["blue", "pink", "yellow"];
$c = ["pink", "white"];
$all = array_merge($a, $b ,$c);
$unique = array_unique($all);
print_r($all);
print_r($unique);

//p184
$myArray = ["a", "b", "c" ,"d", "e", "f"];
$slice1 = array_slice($myArray, 0, 3);
$slice2 = array_slice($myArray, 3, 2);
$slice3 = array_slice($myArray, -3);
print_r($slice1);
print_r($slice2);
print_r($slice3);
print_r($myArray);

//p186(配列の値を効率よく取り出す)
$namelist = ["赤井一郎", "伊藤五郎", "上野信二"];
echo "<ol>", "\n";
foreach($namelist as $value) {
    echo "<li>", $value, "さん</li>\n";
}
echo "</ol>\n";

$valuelist = [5, -3, 12 , 6, 9];
$sum = 0;
foreach($valuelist as $value) {
    if($value > 0) {
        $sum += $value;
    }
}
echo "正の値の合計は{$sum}です。";

//p187
$data = ["ID" => "TR123", "商品名" => "ピークハンド", "価格" => 14500];
echo "<ul>", "\n";
foreach($data as $key => $value) {
    echo "<li>", $key, ":", $value, "</li>\n";
}
echo "</ul>\n";

//p188
function isPlus($value) {
    return $value>0;
}
$valueList = ["a"=>3, "b"=>0, "c"=>5, "d"=>-2, "e"=>4];
$filtered = array_filter($valueList, "isPlus");
print_r($filtered);
echo $filtered["a"];

//p189
$data = ["a987", "鈴木薫", 23];
list($id, $name, $age) = $data;
echo "会員ID: ", $id, "\n";
echo "お名前: ", $name, "\n";
echo "年齢: ", $age, "\n";

//p190
$data = [23, 16, 8, 42, 15, 4];
sort($data);
print_r($data);

//p191
$data = [23, 16, 8, 42, 15, 4];
rsort($data);
print_r($data);

$data = [23, 16, 8, 42, 15, 4];
$clone = $data;
sort($clone);
echo "元:";
print_r($data);
echo "複製:";
print_r($clone);

//p192
$data = ["S" => 23, "M" => 36, "L" => 29];
asort($data);
print_r($data);

arsort($data);
print_r($data);

//p193
$nameList = ["田中", "鈴木", "佐藤", "杉山"];
shuffle($nameList);
print_r($nameList);

$nameList = ["田中", "鈴木", "佐藤", "杉山"];
$result = array_reverse($nameList);
print_r($result);
print_r($nameList);
$consequence = array_reverse($nameList, true);
print_r($consequence);

//p194
$data = ["image7", "image12", "image1"];
natsort($data);
print_r($data);

//p195
$numList = [1008, 1234, 1301];
$numbers = [1301, 1206, 1008, 1214];

function checkNumber($no) {
    global $numbers;
    if(in_array($no, $numbers)) {
        echo "{$no}番は合格です。";
    } else {
        echo "{$no}番は見つかりません。";
    }
}

foreach($numList as $value) {
    echo "<li>", checkNumber($value), "</li>\n";
}

//p197
$nameList = ["田中達也", "Sam Jones", "新井貴子"];

function nameCheck($name) {
    global $nameList;
    if (in_array($name, $nameList)) {
        echo "メンバーです。";
    } else {
        echo "メンバーではありません。";
    }
}

echo nameCheck("田中達也"), "\n";
echo nameCheck("新井"), "\n";
echo nameCheck("Sam Jones"), "\n";
echo nameCheck("SAM JONES"), "\n";

//p198
function array_addUnique(&$array, $value) {
    if (in_array($value, $array)) {
        return false;
    } else {
        $array[] = $value;
        return true;
    }
}

$myList = ["blue", "green"];
array_addUnique($myList, "white");
array_addUnique($myList, "blue");
array_addUnique($myList, "red");
array_addUnique($myList, "green");
print_r($myList);

$nameList = ["m01"=>"田中達也", "m02"=>"佐々木真一", "w01"=>"新井貴子", "w04"=>"笠井香"];
$ageList = ["m01"=>34, "m02"=>42, "w01"=>28, "w02"=>41];
function getAge($name) {
    global $nameList;
    global $ageList;
    $key = array_search($name, $nameList);
    if($key !== false) {
        $age = $ageList[$key];
        echo "{$name}さんは{$age}才です";
    } else {
        echo "「{$name}」はメンバーでは無い。";
    }
}
echo getAge("新井貴子") ,"\n";
echo getAge("田中達也"), "\n";
echo getAge("林純一"), "\n";
echo getAge("佐々木真一"), "\n";

//p199
$checkID = ["a21", "d21", "d33", "e53"];
$aList = ["a12", "b15", "d21"];
$bList = ["d13", "e53", "f10", "k12"];

$diffID = array_diff($checkID, $aList, $bList);
foreach($diffID as $value) {
    echo "{$value}は新規です。\n";
}

//p200
$data = ["NV15", "ST", "MD500GB"];
$search = ["NV", "ST", "MD"];
$replacement = ["New Vision", "スリムタワー", "マルチドライブ"];
$result = str_replace($search, $replacement, $data);
echo "商品データ:\n";
echo $result[0],"、",$result[1],"、",$result[2];

//p201
$nameList = ["田中達也", "川崎賢一", "山田一郎", "杉山直樹"];
$patttern = "/田/";
$result = preg_grep($patttern, $nameList);
echo "該当" . count($result) . "件\n";
foreach ($result as $value) {
    echo $value , "\n";
}

$data = ["R5", "E2", "E6", "A8", "R1", "G8"];
$pattern = "/['A'|'R']/";
$result = preg_grep($pattern, $data, PREG_GREP_INVERT);
echo "該当しない" . count($result) . "件\n";
$resultString = implode("、", $result);
echo $resultString;
echo "\n";

//p202
$data = [];
$data[] = ["name"=>"井上真美", "age"=>37, "phone"=>"090-4321-9999"];
$data[] = ["name"=>"坂田京子", "age"=>32, "phone"=>"06-3434-7788"];
$data[] = ["name"=>"石岡 稔", "age"=>29, "phone"=>"0467-89-9191"];
$data[] = ["name"=>"多田優美", "age"=>35, "phone"=>"59-1212"];
$pattern = "/(-)\d{4}$/";
$replacement = "$1****";
foreach ($data as $user) {
    $result = preg_replace($pattern, $replacement, $user);
    foreach ($result as $key => $value) {
        echo "{$key}:", $value, "\n";
    }
}
print_r($data);

//p204
function exchangeList($value, $key, $rateData) {
    $rate = $rateData["rate"];
    if ($rate == 0) {
        return;
    }
    $price = $value/$rate;
    $exPrice = sprintf('%.02f', $price);
    echo "<li>", $rateData["symbol"], $exPrice, "</li>";
}

$priceList = [2300, 1200, 4000];
$dollaryen = ["symbol"=>'$', "rate"=>112.50];
echo "<ul>";
array_walk($priceList, "exchangeList", $dollaryen);
echo "</ul>";

//p205
function exchange($value) {
    global $rate;
    if ($rate == 0) {
        $rate = 1;
    }
    $exPrice = $value/$rate;
    $exPrice = round($exPrice*100)/100;
    return $exPrice;
}
$priceYen = [2300, 1200, 4000];
$rate = 112.50;
$priceDollar = array_map("exchange", $priceYen);
print_r($priceDollar);

//p206
function listUp($value1, $value2) {
    echo "<li>", $value1, " -- ", $value2, "</li>", "\n";
}

$point = ["10km", "20km", "30km", "40km", "Goal"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
echo "<ul>";
array_map("listUp", $point, $split);
echo "</ul>";






?>