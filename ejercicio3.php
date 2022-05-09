<!-- Crear un código que pasado un número nos diga cuántas veces es
necesario elevarlo para que pase de 10.000
Ej: si el número es 150 elevado a 2, el resultado es 2 => 1502 > 10.000
Ej: si el número es 5 elevado a 6, el resultado es 6 => 56 > 10.000 -->

<?php

$number = isset($_GET["number"])? (is_numeric($_GET["number"])? $_GET["number"] : 5) : 5;

$total = $number;

$counter = 1;

//es un bucle en el que ejecuta lo q le decimos hasta cumplir la condición entre paréntesis

while ($total < 10000) {
    /* $total *= $number; 
    $counter++; */
    $total = pow($number, ++$counter);
};

echo "si el número es $number, el resultado es $counter.";