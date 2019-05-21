<?php
require_once("/Users/narahiroyuki/workspace/php-db/chapter7.php/userstudy-c7.DateTool.php");

class Milk {
    use DateTool;
    //プロパティ宣言
    public $thaDate;
    public $limitDate;
    
    function __construct() {
        //今日の日付
        $now = new DateTime();
        //年月日に直して設定する
        $this->theDate = $this->ymdString($now);
        //10日後の日付
        $this->limitDate = $this->addYmdString($now, 10);
    }

}
?>