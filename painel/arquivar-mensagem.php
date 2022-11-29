<?php
require('./modulos/conexao.php');

$id_arquivar = $_GET['id'];
$query_arquivar = "UPDATE tb_mensagem SET arquivar = 1 WHERE id = {$id_arquivar}";
mysqli_query($conn, $query_arquivar);

header('location: mensagem.php');


?>