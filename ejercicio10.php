<!-- Enunciado:

Escribir un programa creando una función que pasado un
array de números nos diga la suma de todos ellos

Objetivo:

Practicar con funciones y arrays. -->

<?php

$numeros = [1,2,3,7,8,9];

// ?a=1,2,3
//con el explode lo convertimos en un array
$numeroslist = explode(",", $_GET["a"]); 

function sumaArray($num) {
    $total = "";
    for ($i=0; $i < count($num); $i++) { 
        $total = $total + $num[$i];
    }
    echo $total;
};

echo "<br> suma array archivo interno <br>"; 
sumaArray($numeros);

echo "<br> suma array dado <br>";
sumaArray($numeroslist);