<!DOCTYPE html>
<html>
<head>
    <title>Résolution d'une équation du deuxième degré</title>
</head>
<body style="text-align: center;">

<h2 style="color: palevioletred;">Résolution d'une équation du deuxième degré</h2>

<form action="" method="post">
   <fieldset>
    <label for="a">Coefficient a :</label>
    <input type="number" id="a" name="a" required>
    <br><br>
    <label for="b">Coefficient b :</label>
    <input type="number" id="b" name="b" required>
    <br><br>
    <label for="c">Coefficient c :</label>
    <input type="number" id="c" name="c" required>
    <br><br>
    <input type="submit" value="Résoudre" style="border-radius: 50px;background-color :blue ; width : 200px">
    </fieldset>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        
        if ($a != 0) {
            
            $delta = $b * $b - 4 * $a * $c;
        
            
            if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                echo "<p>Les solutions de l'équation sont : x1 = $x1 et x2 = $x2</p>";
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a);
                echo "<p>L'équation admet une seule solution : x = $x</p>";
            } else {
                echo "<p>L'équation n'a pas de solution réelle</p>";
            }
        } else {
            echo "<p>Le coefficient ne peut pas être zéro pour une équation du deuxième degré.</p>";
        }
    } else {
        echo "<p>Veuillez saisir tous les coefficients de l'équation.</p>";
    }
}
?>

</body>
</html>
