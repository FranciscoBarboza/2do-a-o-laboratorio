<?php

// Ejercicio 2 – Crear un script php que guarde en diferentes variables su nombre, apellido, edad
// y dirección y luego muestre en pantalla estos datos con letra mayúscula.
// Cuando ejecute la pagina dentro del navegador, observe el código fuente y analice las
// diferencias entre el código escrito y el código que esta viendo. 

$nombre= "carlos";
$apellido= "villagran";

echo 
"nombre: ".strtoupper($nombre)."\n".
"apellido: ". strtoupper($apellido)."\n";
?>