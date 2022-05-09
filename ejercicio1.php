<!-- Crear un fichero php que reciba el título como parámetro GET
y en base a eso añada el contenido dentro de la etiqueta <h1>
del documento html. -->

<?php

$valor = $_GET["titulo"];

echo "<h1>$valor</h1>";

$color = $_GET["color"];

echo "<h1>$color</h1>";