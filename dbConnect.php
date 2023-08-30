<?php
// Include config file
include_once 'config.php';

// Connect to the database 
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
if($conn->connect_error){ 
    die("Error al conectar con la BBDD: " . $conn->connect_error); 
}