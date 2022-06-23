<?php
session_start();
if(isset($_POST['do_login']))
{
 $host="localhost";
 $username="root";
 $password="";
 $db="sudev";
 $connect=mysqli_connect($host,$username,$password, $db);
 $username=$_POST['username'];
 $password=$_POST['password'];
 $select_data=mysqli_query($connect, "select * from account where username ='$username' and password='$password'");
 if($row=mysqli_fetch_array($select_data))
 {
  $_SESSION['username']=$row['username'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
