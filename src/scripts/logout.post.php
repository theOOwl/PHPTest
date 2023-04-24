<?php 

session_start();

session_unset();

session_destroy();

header("Location: /demo/src/pages/login.php");

?>