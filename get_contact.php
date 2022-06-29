<?php
include 'dbconnect.php';

if (isset($_POST['send_contact'])) {
    mysqli_query($connect, "insert into contact set
        firstname = '$_POST[firstname]',
        lastname = '$_POST[lastname]',
        email = '$_POST[email]',
        phone = '$_POST[phone]',
        message = '$_POST[message]'");

    echo '<script type ="text/JavaScript">';
    echo 'alert("Selamat Belajar PHP")';
    echo '</script>';
    echo "<meta http-equiv='refresh' content='0; url=index.php?p=contact'>";
    // echo "Message already send!";
}
