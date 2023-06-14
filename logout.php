<?php
//create session 
session_start();

//capture and destroy session session variables
unset($_SESSION['email'], $_SESSION['password']);
session_destroy();

header("location:login.php");
?>