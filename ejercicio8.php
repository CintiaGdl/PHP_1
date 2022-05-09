<!-- Enunciado:

Escribir un programa que dado un array, te diga la longitud
del string más largo y el del más corto.

ej:
El string más corto es 2 y el string más largo es 8


Objetivo:

Familiarizarse con el tratamiento de arrays -->

<?php

$cadenas = ["patata","cebolla","sal","pimienta","te","agua"];

$numeros = [];

foreach ($cadenas as $item) {
    array_push($numeros, strlen($item));
};

$longmin = min($numeros);
$longmax = max($numeros);

echo "el valor más largo mide $longmax y el valor más corto mide $longmin";

