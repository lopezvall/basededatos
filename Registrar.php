<?php

include 'Conexion.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $nombre = $_POST['nombre'];
 $codigo = $_POST['codigo'];

 $Sql_Query = "insert into producto(nombre,codigo) values ('$nombre','$codigo')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Datos enviados con éxito';
 
 }
 else{
 
 echo 'Inténtalo de nuevo';
 
 }
 mysqli_close($con);
?>