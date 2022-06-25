<?php
session_start();
$_SESSION['session'] = NULL;

include "dbconnect.php";
	if(isset($_POST['submit'])){
			$username	= isset($_POST['user']) ? $_POST['user'] : "";
			$password	= isset($_POST['pass']) ? $_POST['pass'] : "";
			$qry	= mysqli_query($connect,"SELECT * FROM account WHERE username = '$username' AND password = '$password'");
			$sesi	= mysqli_num_rows($qry);

			if ($sesi == 1)
			{
				$data_admin	= mysqli_fetch_array($qry);
				$_SESSION['id'] = $data_admin['id'];
				$_SESSION['session'] = $data_admin['name'];
				
				echo "<script>alert('Success to Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=dashboard.php?user=$sesi'>";
			} //if there is a data

			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login.php'>";
				echo "<script>alert('Failed to Log In');</script>";
			} //if there is no data 
		
		
	}
	else
	{
	  include "login.php";
	}
?>
