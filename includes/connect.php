<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'feeedback_db');
//create a connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//CHECK CONNECTION
if($conn->connect_error){
    die('Connection failed:' . $conn->connect_error);
}else{
    echo "Connected successfully";
}


?>