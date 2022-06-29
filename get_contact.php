<?php
	include 'dbconnect.php';
 
	if(isset($_POST['send_contact'])){
        mysqli_query($connect, "insert into contact set
        firstname = '$_POST[firstname]',
        lastname = '$_POST[lastname]',
        email = '$_POST[email]',
        phone = '$_POST[phone]',
        message = '$_POST[message]'");

        echo "Message already send!";
	}
?>