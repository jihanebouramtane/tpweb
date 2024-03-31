<?php

function tirageAleatoire() {
    return rand(1, 100); 
}


do {
    $nombre1 = tirageAleatoire();
    $nombre2 = tirageAleatoire();
    $nombre3 = tirageAleatoire();
    
   
    $suiteValide = ($nombre1 % 2 == 0) && ($nombre2 % 2 == 0) && ($nombre3 % 2 != 0);
} while (!$suiteValide);


echo "Suite obtenue : $nombre1, $nombre2, $nombre3";
?>
