<?php
require_once("userstudy-c7.Player.php");

class Soccer extends Player {
    public function play() {
        echo "{$this->name}がシュート","\n";
    }
}


?>