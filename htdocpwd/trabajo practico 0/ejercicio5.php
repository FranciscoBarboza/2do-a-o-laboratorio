<html>
    <head><title>ejercicio 5</title></head>
    <body>
<!-- Ejercicio 5 – Mostrar por pantalla la tabla de multiplicar del 2. Emplear el for, luego el while y
por último el do/while. La salida debe verse con el siguiente formato:
2 x 1 es 2
2 x 2 es 4...... -->
<?php


//for
for ($i=1; $i <= 10 ; $i++) {
    echo "2 x {$i} es: ". (2 * $i). "<br>";    
}


//while
$a=1;
while ($a <= 10) {
    echo "3 x {$a} es ". (3 * $a). "<br>";
    $a++;
}
$b=1;


//do while
do {
    echo "4 x {$b} es ". (4 * $b). "<br>";
    $b++;
} while ($b <= 10);
?>
    </body>
</html>