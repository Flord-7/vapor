<?php
require('./modulos/top_menu.php');
$error_message = $_GET['error'] ?? null;
?>



<div class="container-novo">
<form action="cadastrar-idioma.php" method="POST">
  <div class="formulario">
    <label for="tex">Novo Idioma</label>
    <input onkeyup="apenas_pri_letra(this)" onfocus="removerElementoPorId('erro-mensagem')" type="text" name="nome" value=""><br>
  </div>

  <?php if($error_message != null) { ?>
          <div class="error-message" id="erro-mensagem"><?=$error_message?></div>
  <?php } ?>

    <br>
  <div class="form-botao">
    <button class="action-button">Novo Idioma</button>
  </div>

</form>

</div>






<?php require('./modulos/footer.php')?>