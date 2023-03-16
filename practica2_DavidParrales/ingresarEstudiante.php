
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'conexion.php';

    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $carrera = $_POST["carrera"];
    $anio = $_POST["anio"];
   
    $my_query = "insert into estudiante (nombres, apellidos, carrera, anio ) values('".$nombres."','".$apellidos."','".$carrera."','".$anio."')";
    $result = $mysql->query($my_query);

    if($result == true){
        echo 'Registro guardado exitosamente';
    } else { 
        echo 'Error';
    }
} else {
    echo 'Error deconocido';
}


?>