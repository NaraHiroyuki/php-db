<?php
require_once("/Users/narahiroyuki/workspace/php-db/chapter7_6.php/userstudy-c7.abstract_shopBiz.php");

class MyShop extends ShopBiz {
    public function thanks() {
        echo "ありがとうございました。",  "\n";
    }

    public function hanbai($tanka, $kosu) {
        $price = $tanka * $kosu;
        $this->sell($price);
    }

    public function getUriage() {
        echo "売上合計は、{$this->uriage}円です。";
    }
}
?>