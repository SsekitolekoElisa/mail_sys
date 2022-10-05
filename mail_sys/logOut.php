<?php
session_start();
unset($_SESSION['USERNAME']);
header("location:../logIn.php");;
die();
?>