<?php
$server = "localhost";
$user = "root";
$password = "";
$name_database = "akademik";

$db = mysqli_connect($server, $user, $password, $name_database);

if(!$db){
    die("Can't connect to database".mysqli_connect_error());
} else {
    echo "Connect success!";
}

?>