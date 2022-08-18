<?php
if (!$_POST['nombre'] || !$_POST['apellido'] || !$_POST['edad'] || !$_POST['domicilio']) {
    echo "falta completar datos";
}
elseif($_POST) {


    if ($_POST['edad'] > 18) {
        echo "<h3> soy mayor de edad</h3>";
    

    }
        echo "
        
        hola mi nombre es {$_POST['nombre']} {$_POST['apellido']} <br>
        tengo {$_POST['edad']} y vivo en {$_POST['domicilio']} <br><br>
        maximo nivel de estudio alcanzado: {$_POST['estudios']}
        ";
    
} else {
    echo "no se recibio nada";
}
?>