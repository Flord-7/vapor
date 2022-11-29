<?php 
    require('./modulos/top_menu.php');
    $error_message = $_GET['error'] ?? null;
    $id_categoria = $_GET['id'] ?? null;

    $consultar_categoria = "SELECT nome FROM categoria WHERE id = '{$id_categoria}'";
    $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));
?>

<div class="container-novo">
<form action="cadastrar-categoria.php" method="POST">
  <div class="formulario">
    <label for="tex">categoria</label>
    <input type="text" id="nome" name="nome" value="<?=$categoria['nome']?>"><br>
  </div>

  <?php if($error_message != null) { ?>
          <div class="error-message"><?=$error_message?></div>
  <?php } ?>
  
    <br>
  <div class="form-botao">
    <button class="action-button">Atualizar</button>
  </div>

</form>

</div>


<?php require('./modulos/footer.php') ?>