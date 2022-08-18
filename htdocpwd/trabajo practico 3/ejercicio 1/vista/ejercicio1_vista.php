<html>
    <head><title>vista e1</title></head>
    <body>
    <!-- Ejercicio 1 – Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
cargado, en caso contrario mostrar un mensaje indicando el problema.  -->
        <form action="../control/ejercicio1_control.php" enctype="multipart/form-data" method="POST">
            <input type="file" name="archivo" id="archivo" value="subir archivo">
            <input type="submit" value="enviar">
        </form>
    </body>
</html>