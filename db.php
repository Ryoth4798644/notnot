<?php

$servername = "localhost";
$username = "root";
$pass = "pass";
$dbname = "PanicaUsers";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
    die("Connection Fialed". mysqli_connect_error());
?>