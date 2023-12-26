<?php
session_start();

if($_SESSION["name"] == null) {
    header("Location: ./admin-login.php");
}
else {

// remove all session variables
session_unset();

// destroy the session
session_destroy();    

header("Location: ./admin-login.php");
}
?>