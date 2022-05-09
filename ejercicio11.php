<!-- Enunciado:

Crear una función que ‘milenialice’ un texto que se le pase, es decir:
    * los ‘que’ los convierte el ‘k’
    porque => xq
    * Pone todo en mayúsculas indistintamente
    * Gu/Bu => w
    * Igual => =
    * Sin apertura de ¡ ni ¿, ni acentuación

Podéis echarle imaginación ;)


Objetivo:

Practicar con funciones cadenas y arrays.
Mover esas funciones a un fichero llamado util.php y hacer llamadas a dichas 
funciones desde otro fichero diferente. -->

<?php

$text = "El cuervo abrió el pico y graznó; fue un chillido agudo de miedo, y los jirones de niebla gris que se arremolinaban a su alrededor se desgarraron como un velo, y vio que el cuervo no era tal, sino una mujer, una criada de larga cabellera negra a la que había visto antes. ¿Dónde? En Invernalia, claro, la recordaba bien; y entonces se dio cuenta de que estaba en Invernalia, en una cama, en una habitación helada en la cima de una torre, y la mujer de pelo negro dejó caer la palangana de agua, que se estrelló contra el suelo, y corrió escaleras abajo gritando: «Está despierto, está despierto, está despierto». Bran se tocó la frente, entre los ojos. Aún le quemaba la zona que el cuervo le había picoteado, pero no tenía nada, ni sangre ni herida alguna. Se sentía débil y mareado. Trató de salir de la cama, pero no pudo.";

function milenializar($text) {
    $search = ['que', 'porque', 'gu', 'bu', 'igual', '!', '¿'];
    $replace = ['ke', 'xq', 'wu', 'wu', '=', ' ', ' '];
    $newtext = str_replace($search, $replace, strtolower($text));
    echo "$newtext";
};

milenializar($text);