<?php
require('./modulos/top_menu.php');
$error_message = $_GET['error'] ?? null;
$mensagem = $_GET['mensagem'] ?? null;
$query_categoria = "SELECT * FROM categoria ORDER BY nome ASC";
$categorias = mysqli_query($conn, $query_categoria);
$id_jogo = $_GET['id'] ?? null;

$query_jogo = "SELECT * FROM jogo WHERE id = {$id_jogo}";
$jogo = mysqli_fetch_assoc(mysqli_query($conn, $query_jogo));

?>



<div class="container-novo">
<form action="atualizar-jogo.php" method="POST">
  <div class="formulario">

    <input type="hidden" name="id_jogo" value="<?=$id_jogo?>">

    <label for="nome">Novo jogo:</label>
    <input type="text" required name="nome"  value="<?=$jogo['nome']?>" onkeyup="transformar_texto_maiusculo(this)"><br>

    <label for="preco">Valor: R$</label>
    <input required type="number" name="preco"  min="0.00" value="<?=$jogo['valor']?>" ><br>

    <label for="imagem-da-url">Imagem:</label>
    <input required type="url" name="imagem-da-url" value="<?=$jogo['imagem_url'] ?>" ><br>
    
    <label for="video-da-url">Video:</label>
    <input required type="url" name="video-da-url"
    value="<?=$jogo['video_url']?>" ><br>

    <label for="lancamento">Lançamento:</label>
    <input required type="date" name="lancamento" value="<?=$jogo['data_lancamento']?>"><br>

    <label for="Desenvolvedora">Desenvolvedor(a):</label>
    <input required type="text" name="Desenvolvedora"value="<?=$jogo['desenvolvedora']?>" ><br>

    <label for="categoria">categoria:</label>
    <select name="categoria" id="categoria" required>
      <option disabled selected>Selecione </option>

          <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>


              <option 
              <?php
              if($categoria['id'] == $jogo['id_categoria']){echo 'selected';}
              ?>
              value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
          
          <?php } ?>
    </select><br>


    <label for="descricao">Descrição:</label>
    <textarea required name="descricao" id="descricao" cols="30" rows="10"><?=$jogo['descricao']?></textarea>

  </div>

  <?php if($error_message != null) { ?>
          <div class="error-message"><?=$error_message?></div>
  <?php } ?>

  <?php if($mensagem != null) { ?>
          <div class="mensagem"><?=$mensagem?></div>
  <?php } ?>

    <br>
  <div class="form-botao">
    <button class="action-button">Novo jogo</button>
  </div>

</form>

</div>
<?php require('./modulos/footer.php')?>