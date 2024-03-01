<?php
$server="localhost";
$user="root";
$pass="";
$bd="bonhomia";


$conexion= mysqli_connect($server, $user, $pass, $bd)
 or die ("Error abigo chau digamo...");


    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $numtelefono = $_POST['telefono'];
    $correo = $_POST['email'];


    $insertar = "INSERT into registro values ('$nombre','$edad','$numtelefono','$correo')";
    
    
    $resultado = mysqli_query ($conexion,$insertar) 
    or die ("Error insertar los datos");
    
    
    mysqli_close ($conexion);
    

    echo "datos insertados correctamente...";
    echo "<br>";
    echo "<br>";
    echo "FELICIDADES TE HAS REGISTRADO EN BONHOMIA!!"
   
   

?>
<br><br>
 <a href="socios.html">INICIO</a>