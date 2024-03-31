<?php

function tirageAleatoire() {
    return rand(1, 100); 
}


do {
    $n1 = tirageAleatoire();
    $n2 = tirageAleatoire();
    $n3 = tirageAleatoire();
    
    $suiteValide = ($n1 % 2 == 0) && ($n2 % 2 == 0) && ($n3 % 2 != 0);
} while (!$suiteValide);


echo "Suite obtenue : $n1, $n2, $n3";
?>
