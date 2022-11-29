<?php
require('./modulos/top_menu.php');
$id_mensagem = $_GET['id'] ?? null;

$query_mensagem = "SELECT * FROM tb_mensagem WHERE id = '{$id_mensagem}'";
$mensagem = mysqli_fetch_assoc(mysqli_query($conn, $query_mensagem));

?>

<br><br><br>

<div id="total-visualizar">
    <div class="mensagem">
        <div class="label"><label  for="nome">Nome do Usuário:</label></div><br>
        <div class="phpmensagem"><?= $mensagem['nome'] ?></div>
    </div><br><br>

    <div class="mensagem">
        <div class="label"><label  for="email">E-mail do Usuário:</label></div><br>
        <div class="phpmensagem"><?= $mensagem['email'] ?></div>
    </div><br><br>

    <div class="mensagem">
        <div class="label"><label  for="assunto">Assunto Sugerido:</label></div><br>
        <div class="phpmensagem"><?= $mensagem['assunto'] ?></div>
    </div><br><br>

    <div class="mensagem">
        <div class="label"><label  for="mensagem">Mensagem:</label></div><br> 
        <div><textarea readonly name="msg" id="msg" cols="30" rows="10"><?= $mensagem['mensagem'] ?></textarea></div>
    </div>

</div>

<?php require('./modulos/footer.php') ?>