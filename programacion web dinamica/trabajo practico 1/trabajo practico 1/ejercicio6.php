<html>
    <head></head>
    <body>
<?php
/* Ejercicio 6 – Crear un programa en php en el que generen un array bidimensional asociativo
que contenga los para cada día de la semana la materia que cursan junto con la carga horaria
de la misma. Luego recorrer el array usando una estructura foreach que muestre por pantalla la
información contenida. */
$array= [ 
"lunes" => ["arquitectura computadora"=> "4 horas"], 
"martes"=>["diseño grafico"=> "3 horas"],
"miercoles"=> ["arquitectura web"=> "4 horas"],
"jueves" => ["programacion web dinamica" => "3 horas y media"],
"viernes"=> ["programacion web dinamica" => "4 horas y media"]
];

foreach ($array as $key => $valor) {
    echo "<br><br>dia: {$key}<br>";

    foreach ($valor as $key => $value) {
        echo "materia: {$key} <br> duracion: {$value} <br>";
    }
}
?>
    </body>
</html>