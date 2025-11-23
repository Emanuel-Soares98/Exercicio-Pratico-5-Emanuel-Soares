<?php
include 'conexao.php';

$id = $_GET['id'] ?? 0;

$bd->query("DELETE FROM contatos WHERE id = $id");

header("Location: index.php");
exit;
