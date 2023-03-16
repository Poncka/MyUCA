
<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';

        $id = $_POST["id"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $carrera = $_POST["carrera"];
        $anio = $_POST["anio"];

        $my_query = "update estudiante set nombres= '".$nombres."', apellidos= '".$apellidos."', carrera= '".$carrera."', anio= '".$anio."' where id=".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'Registro actualizado correctamente';
        } else { 
            echo 'Error';
        }
    } else {
        echo 'Error desconocido';
    }

?>