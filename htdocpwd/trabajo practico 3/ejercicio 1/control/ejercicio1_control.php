<html>
    <head><title>control</title></head>
    <body>
<?php
$dir= "/export/home/francisco.barboza/htdocpwd/trabajo practico 3/files/";


if (($_FILES['archivo']["error"] <= 0) && ($_FILES['archivo']['type'] == "application/pdf")) {
    echo "Nombre: " . $_FILES['archivo']['name'] . "<br />";
    echo "Tipo: " . $_FILES['archivo']['type'] . "<br />";
    echo "Tamaño: " . ($_FILES['archivo']["size"] / 1024) . " kB<br />";
    echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name']." <br />";
    // Intentamos copiar el archivo al servidor.
   if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
    echo "ERROR: no se pudo cargar el archivo ";
   }else{
    echo "El archivo ".$_FILES["archivo"]["name"]." se ha copiado con Éxito <br />";
   }
   }else
    echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
?>
    </body>
</html>