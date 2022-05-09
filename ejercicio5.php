<!-- Detectar si un número es capicúa (o palíndromo) -->

<?php

//es primera sólo para numeros
// $number = isset($_GET["number"])? (is_numeric($_GET["number"])? $_GET["number"] : 15) : 121;

//esta para numeros y strings
$number = $_GET["number"];

if ($number == strrev($number)) {
    echo "el numero $number es capicúo.";
} else {
    echo "el numero $number es palíndromo";
};