<?php

$server = "localhost";
$user = "root";
$password = "";
$database_name = "studentRegis";

$db = mysqli_connect($server, $user, $password, $database_name);

if( !$db ){
    die("Failed to connect to database: " . mysqli_connect_error());
} else {
    echo "Successfully connected to the database";
}

?>