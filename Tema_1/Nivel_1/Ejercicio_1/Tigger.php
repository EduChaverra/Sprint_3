<?php
class Tigger {

private static $instance = null;  
private static $countRoar = 0;  

private function __construct() {
        echo "Building character..." . "<br>";
}

private function __clone() { }

public function roar() {
        self::$countRoar++;
        echo "Grrr!" . "<br>";
}

public static function getCounter(){
    return self::$countRoar;
}

public static function getInstance(){
    if(null === self::$instance){
        self::$instance = new Tigger();
    }
    return self::$instance;
}

}
?>