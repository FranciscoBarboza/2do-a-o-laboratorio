<?php
if ($_POST) {
    $sumatoria= 0;
    foreach ($_POST as $key => $value) {
        $sumatoria+= $value;
    }

    echo "la cantidad de horas semanales son {$sumatoria}";
} else {
    echo "no se recibio nada";
}
?>