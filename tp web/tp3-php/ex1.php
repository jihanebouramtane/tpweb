<!DOCTYPE html>
<html>
<head>
    <title>Nombres d'Armstrong</title>
</head>
<body style="text-align: center";>

<h2 style="color: blue;">Nombres d'Armstrong inférieurs à 1000 :</h2>

<fieldset style="background-color:darkslategrey;">
<ul>
    <?php
    
    function Armstrong($n) {
        $temp = $n;
        $somme = 0;

        
        while ($temp > 0) {
            $chiffre = $temp % 10;
            $somme += pow($chiffre, 3);
            $temp = (int)($temp / 10);
        }

        
        return $somme == $n;
    }

   
    for ($i = 1; $i < 1000; $i++) {
    
        if (Armstrong($i)) {
            echo "<ul>$i</ul>";
        }
       
    }
   
    ?>
</ul>
</fieldset>

</body>
</html>
