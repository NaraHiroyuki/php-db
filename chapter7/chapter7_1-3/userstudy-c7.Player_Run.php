<?php
require_once("userstudy-c7.Player.php");

class Runner extends Player {
    
    public $age;

    function __construct($name, $age) {

        parent::__construct($name);

        $this->age = $age;
    }

    public function who() {
        echo "{$this->name}、{$this->age}歳です。","\n";
    }

    public function play() {
        echo "{$this->name}が走る!", "\n";
    }
}
?>