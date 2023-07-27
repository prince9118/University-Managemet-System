<?php
session_start();
$server ="localhost:3306";
$username ="root";
$password=""; 
$con = mysqli_connect($server, $username, $password );
mysqli_select_db($con,'university');
?>