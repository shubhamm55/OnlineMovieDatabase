<?php

session_start();
session_destroy();
$_SESSION = array();
header("Location: Trial_SignIn.php");

?>