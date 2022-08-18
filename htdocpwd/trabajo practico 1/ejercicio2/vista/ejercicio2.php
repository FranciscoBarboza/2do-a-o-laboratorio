<html>
    <head>ejercicio2</head>
    <body>
<?php
/* Ejercicio 2
Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana. */

echo
"<form name='form1' id='form1' method='POST' action='../control/cantidadHoras.php'>
lunes
<br><input type='number' placeholder='lunes desde' name='lunes_desde'>
<br><input type='number' placeholder='lunes hasta' name='lunes_hasta'>
<br>martes
<br><input type='number' placeholder='martes desde' name='martes_desde'>
<br><input type='number' placeholder='martes hasta' name='martes_hasta'>
<br>miercoles
<br><input type='number' placeholder='miercoles desde' name='miercoles_desde'>
<br><input type='number' placeholder='miercoles hasta' name='miercoles_hasta'>
<br>jueves
<br><input type='number' placeholder='jueves desde' name='jueves_desde'>
<br><input type='number' placeholder='jueves hasta' name='jueves_hasta'>
<br>viernes
<br><input type='number' placeholder='viernes desde' name='viernes_desde'>
<br><input type='number' placeholder='viernes hasta' name='viernes_hasta'>
<br>
<br>
<input type='submit' value='comprobar'>
</form>"
;
?>
    </body>
</html>