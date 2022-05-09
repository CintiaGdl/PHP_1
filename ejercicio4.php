<!-- Enunciado:

Dado 2 ficheros, si la extensión termina en .exe poner en mayúscula
el nombre del fichero, y si termina en .db imprimirlo en minúculas.

Es decir, si los ficheros son pepe.exe y Ana.db, el resultado tiene
que ser PEPE.EXE y ana.db

Objetivo:

Familiarizarse con el tratamiento de strings -->

<?php

$fichero = $_GET["fichero"];

if (str_ends_with($fichero, ".exe")) {
    echo strtoupper($fichero);
} else if (str_ends_with($fichero, ".db")) {
    echo strtolower($fichero);
} else {
    echo "No se reconoce el fichero";
};


?>
