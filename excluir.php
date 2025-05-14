<?php
include_once('conexao.php');

if(isset($_GET['excluir'])){
    $id = $_GET['excluir'];

    $stmt = $conn->prepare("DELETE FROM alunos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: index.php");
exit;
?>