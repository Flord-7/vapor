<?php 
    require('./modulos/top_menu.php');
    $error_message = $_GET['error'] ?? null;
    $id_idioma = $_GET['id'] ?? null;

    $consultar_idioma = "SELECT nome FROM idioma WHERE id = '{$id_idioma}'";
    $idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));
?>

<div class="container-novo">
<form action="atualizar-idioma.php" method="post">
  <div class="formulario">
    <label for="idioma">Idioma</label>
    <input onkeyup="apenas_pri_letra(this)" value="<?=$idioma['nome']?>" type="text" id="idioma" name="idioma" >
    <input value="<?=$id_idioma?>" name="id" type="hidden">
    <br>
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