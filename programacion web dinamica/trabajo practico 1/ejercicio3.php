<html>
    <head><title>ejercicio 3</title></head>
    <body>
<?php
/* Ejercicio 3 – Crear un script php en el que generen un array unidimensional asociativo que
contenga sus datos personales (apellido, nombre, documento, dirección) y luego mostrar los
datos almacenados por pantalla. */

$ejercicio= ["nombre" => "carlos", "apellido" => "villagran", "documento" => "124568754"];

print_r($ejercicio);

foreach ($ejercicio as $key=>$value) {
    echo $key.": {$value} <br>";
}
?>
    </body>


</html>