
<?php
    $mysql = new mysqli("localhost", "root" , "" , "prueba_bd");
    if($mysql->connect_error){
        echo"Error: ";
        die("Error de conexión");
    }
    else{
        echo "Conexion exitosa \n";
    }
?>