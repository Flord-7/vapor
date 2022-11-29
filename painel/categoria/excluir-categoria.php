<?php 

require('./modulos/conexao.php');

$id_categoria = $_GET['id'] ?? null;

$query_jogo_categoria = "DELETE FROM jogo_categoria WHERE id_categoria = {$id_categoria}";

$query_categoria = "DELETE FROM categoria WHERE id = {$id_categoria}";

mysqli_query($conn, $query_jogo_categoria);

mysqli_query($conn, $query_categoria);

header('location: categorias.php');

?>