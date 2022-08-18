<html>
    <head><title>control ejercicio 7</title></head>
    <body>
<?php
echo "respuesta es: ";


if ($_POST['operacion'] == "+") {
    $operacion= intval($_POST['op_1']) + intval($_POST['op_2']);
    echo "{$operacion}";
} elseif ($_POST['operacion'] == "-") {
    $operacion= intval($_POST['op_1']) - intval($_POST['op_2']);
} elseif ($_POST['operacion']== "*"){
    $operacion= intval($_POST['op_1']) * intval($_POST['op_2']);
} else {
    echo "se mando mal los datos";
}
?>


    </body>
</html>