<?php
$host = "localhost";
$user = "professor";
$pass = "professor123";
$db = "escola";

$conn = new mysqli($host, $user, $pass, $db);

$q = "CREATE TABLE alunos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) UNIQUE)";

$conn->query($q);
$conn->close();
?>