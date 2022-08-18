<html>
    <head><title>ejercicio 4</title></head>
    <body>


<?php
/* Ejercicio 4 – Realizar un programa que, a partir de tres variables enteras llamadas $a, $b y $c,
muestre por pantalla el valor de la mayor y la menor de ellas. Si por ejemplo asignamos los
valores 15, 94 y 73 a $a, $b y $c respectivamente, por pantalla debe mostrarse:
El mayor valor de 15, 94 y 73 es 73
El menor valor de 15, 94 y 73 es 15 */

$a= 15;
$b= 94;
$b= 79;
//mayor
if($a > $b && $a > $c){
    echo "mayor es: {$a}<br>";
} elseif ($b > $a && $b > $c) {
    echo "mayor es: {$b}<br>";
} elseif ($c > $a && $c > $b) {
    echo "mayor es: {$c}<br>";
}
//menor
if($a < $b && $a < $c){
    echo "menor es: {$a}<br>";
} elseif ($b < $a && $b < $c) {
    echo "menor es: {$b}<br>";
} elseif ($c < $a && $c < $b) {
    echo "menor es: {$c}<br>";
}



?>



</body>
</html>