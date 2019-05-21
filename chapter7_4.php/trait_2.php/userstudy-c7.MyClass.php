<?php
require_once("/Users/narahiroyuki/workspace/php-db/chapter7.php/userstudy-c7.TaroTool.php");
require_once("/Users/narahiroyuki/workspace/php-db/chapter7.php/userstudy-c7.HanaTool.php");

class MyClass {
    use TaroTool, HanaTool {
        TaroTool::hello as taroHello;
        HanaTool::hello as hanaHello;
        HanaTool::hello insteadof TaroTool;
    }
}
?>