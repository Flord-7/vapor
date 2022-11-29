<?php 

require('./modulos/conexao.php');

$id_jogo = $_POST['id_jogo'] ?? null;
$nome = $_POST['nome'] ?? null;
$preco = $_POST['preco'] ?? null;
$imagem = $_POST['imagem-da-url'] ?? null;
$video = $_POST['video-da-url'] ?? null;
$data = $_POST['lancamento'] ?? null;
$desenvolvedor = $_POST['Desenvolvedora'] ?? null;
$categoria = $_POST['categoria'] ?? null;
$descricao = $_POST['descricao'] ?? null;

if($video == "" || $video == null) {

    $query_delete_video = "UPDATE jogo SET video = null WHERE id = {$id_jogo}";
    mysqli_query($conn, $query_delete_video);

    $query_atualizar_jogo_sem_video = "UPDATE jogo SET nome = '{$nome}', valor = {$preco}, descricao = '{$descricao}', imagem_url = '{$imagem}', data_lancamento = '{$data}', desenvolvedora = '{$desenvolvedor}', id_categoria = {$categoria} WHERE id = {$id_jogo}";

    mysqli_query($conn, $query_atualizar_jogo_sem_video);

} else {
    
    $query_atualizar_jogo_com_video = "UPDATE jogo SET nome = '{$nome}', valor = {$preco}, descricao = '{$descricao}', imagem_url = '{$imagem}', video_url = '{$video}', data_lancamento = '{$data}', desenvolvedora = '{$desenvolvedor}', id_categoria = {$categoria} WHERE id = {$id_jogo}";

    mysqli_query($conn, $query_atualizar_jogo_com_video);

}

header("location: editar-jogo.php?id={$id_jogo}&mensagem=Jogo foi atualizado com sucesso!");
?>
