<?php
require('./modulos/top_menu.php');
$error_message = $_GET['error'] ?? null;

$query_categoria = "SELECT * FROM categoria ORDER BY nome ASC";
$categorias = mysqli_query($conn, $query_categoria);


?>



<div class="container-novo">
<form action="cadastrar-jogo.php" method="POST">
  <div class="formulario">
    <label for="nome">Novo jogo:</label>
    <input type="text" required name="nome" value=""><br>

    <label for="preco">Valor: R$</label>
    <input required type="number" name="preco"  min="0.00"><br>

    <label for="imagem-da-url">Imagem:</label>
    <input required type="url" name="imagem-da-url" ><br>
    
    <label for="video-da-url">Video:</label>
    <input required type="url" name="video-da-url" ><br>

    <label for="lancamento">Lançamento:</label>
    <input required type="date" name="lancamento" ><br>

    <label for="Desenvolvedora">Desenvolvedor(a):</label>
    <input required type="text" name="Desenvolvedora" ><br>

    <label for="categoria">categoria:</label>
    <select name="categoria" id="categoria" required>
      <option disabled selected>Selecione </option>

          <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>

              <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
          
          <?php } ?>
    </select><br>


    <label for="descricao">Descrição:</label>
    <textarea required name="descricao" id="descricao" cols="30" rows="10"></textarea>

  </div>

  <?php if($error_message != null) { ?>
          <div class="error-message"><?=$error_message?></div>
  <?php } ?>

    <br>
  <div class="form-botao">
    <button class="action-button">Novo jogo</button>
  </div>

</form>

</div>






<?php require('./modulos/footer.php')?>