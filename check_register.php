<?php
	include 'dbconnect.php';
 
	if(isset($_POST['register'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

        $qry	= mysqli_query($connect,"SELECT * FROM account WHERE username = '$username'");
        $sesi	= mysqli_num_rows($qry);

        if($sesi == 0){
            mysqli_query($connect, "INSERT INTO `account` VALUES('','user', '$name','',  '$username', '$email','$password')") or die(mysqli_error());
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
            echo "<script>alert('Let log in and use our feature');</script>";
        }else{
            echo "<meta http-equiv='refresh' content='0; url=register.php'>";
			echo "<script>alert('username already exist');</script>";
        }
	}
?>