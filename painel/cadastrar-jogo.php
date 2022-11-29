<?php

require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$preco = $_POST['preco'] ?? null;
$imagem = $_POST['imagem-da-url'] ?? null;
$video = $_POST['video-da-url'] ?? null;
$data = $_POST['lancamento'] ?? null;
$desenvolvedora = $_POST['Desenvolvedora'] ?? null;
$categoria = $_POST['categoria'] ?? null;
$descricao = $_POST['descricao'] ?? null;


$buscar_jogo = "SELECT * FROM jogo WHERE nome = '{$nome}'";
$jogo = mysqli_query($conn, $buscar_jogo);

if ($jogo->num_rows > 0) {
    header('location: novo-jogo.php?error=Esse jogo já está cadastrado');
} else {

    $query_novo_jogo_com_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, video_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$preco}, '{$descricao}', '{$imagem}', '{$video}', '{$data}', '{$developer}', {$categoria})";
    $query_novo_jogo_sem_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$preco}, '{$descricao}', '{$imagem}', '{$data}', '{$developer}', {$categoria})";
    
    if ($video == "") {
        mysqli_query($conn, $query_novo_jogo_sem_video);
    } else {
        mysqli_query($conn, $query_novo_jogo_com_video);
    }
    
    header('location: jogos.php');
}


?>