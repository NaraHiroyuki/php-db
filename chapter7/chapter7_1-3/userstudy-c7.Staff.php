<?php
//p217(クラス定義)
class Staff {
    public $name;
    Public $age;

    public function hello() {
        if (is_null($this->name)) {
            echo "こんにちは!", "\n";
        } else {
            echo "こんにちは、{$this->name}です!", "\n";
        }
    }
}

$hana = new Staff();
$taro = new Staff();

$hana->name = "花";
$hana->age = 21;
$taro->name = "太朗";
$taro->age = 35;

print_r($hana);
print_r($taro);

$hana->hello();
$taro->hello();

?>