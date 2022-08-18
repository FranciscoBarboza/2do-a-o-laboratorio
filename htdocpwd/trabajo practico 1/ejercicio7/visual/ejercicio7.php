<html>
    <head><title>ejercicio7</title></head>
    <body>
        <!-- Ejercicio 7
        Crear una página con un formulario que contenga dos input de tipo text y un select. En
        los inputs se ingresarán números y el select debe dar la opción de una operación
        matemática que podrá resolverse usando los números ingresados. En la página que
        procesa la información se debe mostrar por pantalla la operación seleccionada, cada
        uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
        formulario: -->

        <form action="../control/ejercicio7control.php" method="POST" name="form_1" >
            <input type="number" name="op_1" id="op_1">
            <input type="number" name="op_2" id="op_2">

            <select name="operacion" id="operacion" >
                <option value="+">suma</option>
                <option value="-">resta</option>
                <option value="*">multiplicacion</option>
            </select>

            <input type="submit" value="enviar">

        </form>
        
    </body>
</html>