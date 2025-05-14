<?php
include('conexao.php');

$result = $conn->query("SELECT * FROM alunos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade com MySQL</title>
</head>
<body>
    <h2>Cadastrar Aluno</h2>
    <form action="inserir.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Cadastrar">
    </form>

    <h2>Alunos Cadastrados</h2>
    <table border="=1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
        <?php while ($aluno = $result->fetch_assoc())?>
            <tr>
                <td><?=$aluno['id'] ?></td>
                <td><?=$aluno['nome'] ?></td>
                <td><?=$aluno['email'] ?></td>
                <td>
                    <a href="excluir.php?id=<?= $aluno['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>