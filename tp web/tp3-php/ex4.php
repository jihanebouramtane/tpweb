<?php

$nombreN = rand(100, 999);
$essais = 0;
$nombreTire = null;


while ($nombreTire !== $nombreN) {
    $nombreTire = rand(100, 999);
    $essais++;
}


echo "Le nombre d'essais pour réobtenir le nombre $nombreN est : $essais";
?>
