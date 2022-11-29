<?php
require('./modulos/top_menu.php');
$query_plataformas = "SELECT id, nome FROM plataforma";
 $plataformas = mysqli_query($conn, $query_plataformas);
 
 $id_jogo = $_GET['id'] ?? null;

 $query_jogo = "SELECT nome FROM jogo WHERE id = {$id_jogo}";
 $jogo = mysqli_fetch_array(mysqli_query($conn, $query_jogo));

 
 
 $query_plataformas = "SELECT * FROM plataforma WHERE id IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$id_jogo})";
 $plataformas = mysqli_query($conn, $query_plataformas);
 
 $query_plataformas_cadastrar = "SELECT * FROM plataforma WHERE id NOT IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$id_jogo})";
 $plataformas_cadastrar = mysqli_query($conn, $query_plataformas_cadastrar);

?>
<div class="pagina">
    <div class="botao">
      <a href="novo-plataforma.php"><button class="botao-interno">Novo plataforma</button></a>
  </div>
  <div class="tabela">
  <table>
    <tr>
      <th>plataformas - <?=$jogo['nome']?></th>
      <th class="intro" >Excluir</th>
    </tr>
    <?php while ($plataforma = mysqli_fetch_array($plataformas)) { ?>
    <tr>
      <td class="icons"><?= $plataforma['nome'] ?></td>
      <td class="icons" ><a href="delet-plat-jogo.php?id_plataforma=<?= $plataforma['id']?>&id_jogo=<?=$id_jogo?>"><img src="./public/lixeira.png" alt="Excluir"></a></td>
    </tr>
    <?php } ?>

  </table>
  <?php if($plataformas->num_rows == 0) { ?>
            <h1>Não há plataformas cadastrados para o jogo <?=$jogo['nome']?></h1>
        <?php }  ?>
  </div>
  <form action="cadastrar-plataforma-jogo.php" method="post">

                <select required name="id_plataforma" id="id_plataforma">
                    <option value="" disabled selected>Selecione o plataforma</option>

                    <?php while ($plataforma = mysqli_fetch_array($plataformas_cadastrar)) { ?>
                     <option value="<?=$plataforma['id']?>"><?=$plataforma['nome']?></option>
                    <?php } ?>

                </select>
                
                <input type="hidden" value="<?=$id_jogo?>" name="id_jogo">

                <button type="submit">Cadastrar</button>

            </form>
</div>

<?php require('./modulos/footer.php')?> 