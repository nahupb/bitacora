<?php

// Connect to the database 
$mysqli = new mysqli('localhost', 'root', '', 'bitacora'); 
if($mysqli->connect_error){ 
    echo 'Error al conectar con la BBDD '. $mysqli->connect_error;
    die();
}

?>