<?php
session_start(); 
unset($_SESSION['alogin']);
session_destroy(); 
header("location:index.php"); 
?>

