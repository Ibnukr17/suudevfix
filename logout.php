<?php
session_start();
unset($_SESSION['session']);
unset($_SESSION['id']);
session_destroy();
echo "<meta http-equiv='refresh' content='0; url=login.php'>";
?>