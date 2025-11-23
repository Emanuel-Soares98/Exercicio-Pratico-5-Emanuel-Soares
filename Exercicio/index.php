<?php
include 'conexao.php';

$lista = $bd->query("SELECT * FROM contatos ORDER BY nome")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Agenda de Contatos</h2>

<form action="salvar.php" method="post" class="form-cadastro">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="text" name="telefone" placeholder="Telefone" required>
    <button>Cadastrar</button>
</form>

<h3>Contatos</h3>

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th></th>
    </tr>

    <?php foreach ($lista as $linha): ?>
    <tr>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['email'] ?></td>
        <td><?= $linha['telefone'] ?></td>
        <td>
            <a href="editar.php?id=<?= $linha['id'] ?>">Editar</a>
            <a href="#" onclick="confirmarExclusao(<?= $linha['id'] ?>)">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<script src="script.js"></script>
</body>
</html>
