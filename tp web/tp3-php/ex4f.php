<?php

$nombreN = rand(100, 999);


$essais = 0;


for ($nombreTire = null; $nombreTire !== $nombreN; $nombreTire = rand(100, 999)) {
    $essais++;
}


echo "Le nombre d'essais pour réobtenir le nombre $nombreN est : $essais";
?>
