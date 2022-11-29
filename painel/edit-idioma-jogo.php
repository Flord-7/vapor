<?php
require('./modulos/top_menu.php');
$query_idiomas = "SELECT id, nome FROM idioma";
 $idiomas = mysqli_query($conn, $query_idiomas);
 
 $id_jogo = $_GET['id'] ?? null;

 $query_jogo = "SELECT nome FROM jogo WHERE id = {$id_jogo}";
 $jogo = mysqli_fetch_array(mysqli_query($conn, $query_jogo));

 
 
 $query_idiomas = "SELECT * FROM idioma WHERE id IN (SELECT id_idioma FROM jogo_idioma WHERE id_jogo = {$id_jogo})";
 $idiomas = mysqli_query($conn, $query_idiomas);
 
 $query_idiomas_cadastrar = "SELECT * FROM idioma WHERE id NOT IN (SELECT id_idioma FROM jogo_idioma WHERE id_jogo = {$id_jogo})";
 $idiomas_cadastrar = mysqli_query($conn, $query_idiomas_cadastrar);

?>
<div class="pagina">
    <div class="botao">
      <a href="novo-idioma.php"><button class="botao-interno">Novo Idioma</button></a>
  </div>
  <div class="tabela">
  <table>
    <tr>
      <th>Idiomas - <?=$jogo['nome']?></th>
      <th class="intro" >Excluir</th>
    </tr>
    <?php while ($idioma = mysqli_fetch_array($idiomas)) { ?>
    <tr>
      <td class="icons"><?= $idioma['nome'] ?></td>
      <td class="icons" ><a href="excluir-idiomas-jogo.php?id_idioma=<?= $idioma['id']?>
      &id_jogo=<?=$id_jogo?>"><img src="./public/lixeira.png" alt="Excluir"></a></td>
    </tr>
    <?php } ?>

  </table>
  <?php if($idiomas->num_rows == 0) { ?>
            <h1>Não há idiomas cadastrados para o jogo <?=$jogo['nome']?></h1>
        <?php }  ?>
  </div>
  <form action="cadastrar-idiomas-jogos.php" method="post">

                <select required name="id_idioma" id="id_idioma">
                    <option value="" disabled selected>Selecione o Idioma</option>

                    <?php while ($idioma = mysqli_fetch_array($idiomas_cadastrar)) { ?>
                     <option value="<?=$idioma['id']?>"><?=$idioma['nome']?></option>
                    <?php } ?>

                </select>
                
                <input type="hidden" value="<?=$id_jogo?>" name="id_jogo">

                <button type="submit">Cadastrar</button>

            </form>
</div>

<?php require('./modulos/footer.php')?> 