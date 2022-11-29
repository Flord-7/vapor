<?php
require('./modulos/top_menu.php');

$query_mensagems = "SELECT id, nome, assunto FROM tb_mensagem WHERE arquivar = 0";
 $mensagems = mysqli_query($conn, $query_mensagems);

?>
<?php if ($mensagems->num_rows > 0) { ?>
<div class="pagina">

  <div class="tabela">
  <table>
    <tr>
      <th class="intro">Nome</th>
      <th class="intro" >Assunto</th>
      <th class="intro" >Visualizar</th>
      <th class="intro" >Arquivar</th>
    </tr>
    <?php while ($mensagem = mysqli_fetch_array($mensagems)) { ?>
    <tr>
      <td class="icons"><?= $mensagem['nome'] ?></td>
      <td class="icons" ><?=$mensagem['assunto']?></td>
      <td class="icons" ><a href="visualizar-mensagem.php?id=<?= $mensagem['id'] ?>"><img src="./public/olho.png" alt="Visualizar"></a></td>
      <td class="icons" ><a href="arquivar-mensagem.php?id=<?= $mensagem['id'] ?>"><img src="./public/arquivar.png" alt="Arquivar"></a></td>
    </tr>
    <?php } ?>

  </table>
  <?php } else{ ?>
    <div id="not-found">Não há mensagens disponiveis!</div>
  <?php } ?>
  </div>
</div>
<?php require('./modulos/footer.php')?>