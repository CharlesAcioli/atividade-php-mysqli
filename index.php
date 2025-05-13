<?php
$host = "localhost";
$user = "professor";
$pass = "professor123";

$conn = new mysqli($host, $user, $pass);

$q = "CREATE DATABASE IF NOT EXISTS escola";

$conn->query($q);
$conn->close();

?>