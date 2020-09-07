<?php

$mysqli = new mysqli("localhost","root","","db_crud_3_capas");

if($mysqli->connect_errno){
    die("fallo la conexion");
}else{
  //  echo("Conexion exitosa");
}

?>   