<html>
    <head><title>ejercicio3</title></head>
    
    
    <style>
        p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        form input{
            border: 1px black solid;
        }
        form input:focus{
            border: 1px solid black;    
        }
    </style>


    <body>

<!--  Ejercicio 3
Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias 

 Ejercicio 4
Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes.  

Ejercicio 5
Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
“radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo.

Ejercicio 6
Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la cantidad de deportes que practica
-->


<form name='form1' id='form1' method='POST' action='../control/hola.php'>
<p>nombre:</p><input type='text' name='nombre'  >
<p>apellido:</p><input type='text' name='apellido'>
<p>edad:</p><input type='number' name='edad'>
<p>domicilio: </p><input type='text' name='domicilio'><br>
<p>estudios:</p><input type="radio" name='estudios' value='primario'>
<label for="estudios">primario</label>
<input type="radio" name='estudios' value='secundario'>
<label for="estudios">secundario</label>
<input type="radio" name='estudios' value='universitario'>
<label for="estudios">universitario</label>


<p>deportes</p>
<input type="checkbox" name="deportes" id="deportes" value='futbol'>
<label for="deportes">futbol</label>

<input type="checkbox" name="deportes" id="deportes" value='tenis'>
<label for="deportes">tenis</label>

<input type="checkbox" name="deportes" id="deportes" value='rugby'>
<label for="deportes">rugby</label>

<input type="checkbox" name="deportes" id="deportes" value='basket'>
<label for="deportes">basket</label>



<input type='submit'>  

<form> 




    </body>
</html>