<?php
require_once("/Users/narahiroyuki/workspace/php-db/chapter7_5.php/userstudy-c7.interface_WorldRule.php");

class MyClass implements WorldRule {
    public function hello() {
        echo "こんにちは!", "\n";
    }

    public function thanks() {
        echo "ありがとう", "\n";
    }
}
?>