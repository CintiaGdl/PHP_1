<!-- Enunciado:

Escribir un programa que dado un número, cree una pirámide cuya base tiene esa longitud en asteriscos.
Es decir, si el número es 5 el resultado sea:

    *
   * *
  * * *
 * * * *
* * * * *

Y si es 3, el resultado sea:

  *
 * *
* * *

Objetivo:

Familiarizarse con el tratamiento de cadenas -->

<?php

if(isset($_GET["num"])) {
    $num = $_GET["num"];
    piramide2($num);
} else {
    echo "el numero no es valido";
};

function piramide($num) {
    for ($i=0; $i < $num ; $i++) { 
        echo "<pre>";
        
        for ($j = 0; $j < $num - $i; $j++) {
            echo "&nbsp;";
        }
        for ($k=1; $k < $i; $k++) { 
            echo "* ";
        }
        
        echo "</pre>";
    }
}

function piramide2($num) {
    for ($i=1; $i <= $num ; $i++) { 
        echo "<pre>";
        echo str_repeat("&nbsp;", $num - $i);
        echo str_repeat("* ", $i);
        echo "</pre>";
    }
}