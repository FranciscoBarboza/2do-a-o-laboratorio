<html>
    <head>
        <title>ejercicio 7</title>
    </head>
    <body>
<?php
/* Ejercicio 7 – Dado un array de 20 elementos que consiste en números reales (con coma
decimal) y que cada elemento representa la venta del día de un comercio. Calcular el promedio
de ventas utilizando alguna estructura iterativa. */

$ventas= [10, 5.50 , 2.2, 60.12, 100.58];

$a= 0;
$sumatoria= 0;
$cantidad= count($ventas);
do {
    $sumatoria += $ventas[$a];
    echo "dia ". ($a+1). "<br> venta= $ {$ventas[$a]} <br>";
    $a++;
} while ($a < $cantidad);
$sumatoria= $sumatoria/$cantidad;
echo "<br><br> el promedio es= $ {$sumatoria}"
?>
    </body>
</html>