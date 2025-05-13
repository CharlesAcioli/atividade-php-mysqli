<?php
$host = "localhost";
$user = "professor";
$pass = "professor123";
$db = "escola";

$conn = new mysqli($host, $user, $pass, $db);

$table = "alunos";
$nome = "Charles";
$email = "charlesemail@email.com";

$q = "INSERT INTO $table (`nome`, `email`) VALUES (?,?)";


$conn->query($q);
$conn->close();
?>