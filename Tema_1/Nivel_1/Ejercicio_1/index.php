<?php

require_once "Tigger.php";

$tigger = Tigger::getInstance();
$rugidos = 3;

for ($i = 0 ; $i < $rugidos ; $i++){
   $tigger->roar();
}

echo "Tigger ha rugido " . $tigger::getCounter() . " veces";

?>