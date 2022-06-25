<?php
// include '../dbconnect.php';
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "sudev";

$connect = mysqli_connect($server, $user, $password, $nama_database);

if( !$connect ){
    die("Failed to login: " . mysqli_connect_error());
}

?>