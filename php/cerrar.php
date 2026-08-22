<?php
session_start();

$nombre=$_SESSION['usuario'];

session_destroy();

header("location:index.php");
?>