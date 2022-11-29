<?php 

require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$assunto = $_POST['assunto'] ?? null;
$mensagem = $_POST['mensagem'] ?? null;

$codigo_mensagem = "INSERT INTO	tb_mensagem (nome, email, assunto, mensagem, arquivar) VALUES ('{$nome}', '{$email}', '{$assunto}', '{$mensagem}', 0)"; 

mysqli_query($conn, $codigo_mensagem);

if($codigo_mensagem != null){
    header('location: suporte.php?sucesso= Sua mensagem foi enviada com sucesso!');
}





?>