<?php
$host = "localhost";
$user = "professor";
$pass = "professor123";
$db = "escola";

$conn = new mysqli($host, $user, $pass, $db);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    
    $stmt = $conn->prepare("INSERT INTO alunos (`nome`, `email`) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $email);
    $stmt->execute();
    $stmt->close();

    echo "Aluno cadastrado com sucesso!";
}


$conn->close();
?>