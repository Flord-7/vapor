<?php 
    require('./modulos/top_menu.php');
    $error_message = $_GET['error'] ?? null;
    $id_plataforma = $_GET['id'] ?? null;

    $consultar_plataforma = "SELECT nome FROM plataforma WHERE id = '{$id_plataforma}'";
    $plataforma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataforma));
?>

<div class="container-novo">
<form action="atualizar-plataforma.php" method="POST">
  <div class="formulario">
    <label for="plataforma">plataforma</label>
    <input onkeyup="apenas_pri_letra(this)" type="text" id="plataforma" name="plataforma" value="<?=$plataforma['nome']?>">
    <input value="<?=$id_plataforma?>" name="id" type="hidden" >
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