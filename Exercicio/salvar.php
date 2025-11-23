<?php
include 'conexao.php';

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$id = $_POST['id'] ?? null;

if ($id) {
    $bd->query("UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id");
} else {
    $bd->query("INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')");
}

header("Location: index.php");
exit;
