<!-- Crear un código que pasado un número, nos diga si es par o impar. -->

<?php

$number = $_GET["num"];

if ($number % 2 == 0) {
    echo "numero par";
} else {
    echo "numero impar";
};


//nos comprueba num2 se pasa por parametro y sino toma el valor 2 por defecto

$number2 = isset($_GET["num2"])? $_GET["num2"] : 2;

if ($number2 % 2 == 0) {
    echo "numero par";
} else {
    echo "numero impar";
};

//is_numeric comprueba primero si es numérico el valor que le pasamos

$number3 = isset($_GET["num3"])? (is_numeric($_GET["num3"])? $_GET["num3"] : 2) : 5;

if ($number3 % 2 == 0) {
    echo "numero par";
} else {
    echo "numero impar";
};