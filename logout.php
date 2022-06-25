<?php
session_start();
unset($_SESSION['session']);
unset($_SESSION['id']);
session_destroy();
header("land.php");
?>