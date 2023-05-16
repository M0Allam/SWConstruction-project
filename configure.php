<?php
ob_start();
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "fitness";
$con = mysqli_connect($host, $user, $pass, $dbname);
?>