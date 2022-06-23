<?php
$db="sudev";
$hostname="localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($hostname,$username, $password, $db);
 if($connect){
      //
 }else{
     echo 'Error in connection';
 }
