<?php
require('./modulos/top_menu.php');
$query_jogos = "SELECT id, nome FROM jogo";
$jogos = mysqli_query($conn, $query_jogos);
?>

<div class="pagina">
    <div class="botao">
      <a href="novo-jogo.php"><button class="botao-interno">Novo jogo</button></a>
  </div>
  <div class="tabela">
  <table>
    <tr>
      <th>Novo</th>
      <th class="intro">Idiomas</th>
      <th class="intro">Plataforma</th>
      <th class="intro" >Editar</th>
      <th class="intro" >Excluir</th>
    </tr>
    <?php while ($jogo = mysqli_fetch_array($jogos)) { ?>
    <tr>
      <td class="icons"><?= $jogo['nome'] ?></td>
      <td class="icons"><a href="editar-idiomas-jogos.php?id=<?=$jogo['id'] ?>"><img src="./public/editar.png" alt="Editar"></a></td>
      <td class="icons"><a href="editar-plataformas-jogos.php?id=<?=$jogo['id'] ?>"><img src="./public/editar.png" alt="Editar"></a></td>
      <td class="icons" ><a href="editar-jogo.php?id=<?= $jogo['id'] ?>"><img src="./public/editar.png" alt="Editar"></a></td>
      <td class="icons" ><a onclick="excluirjogo(<?= $jogo['id'] ?>)" href="#"><img src="./public/lixeira.png" alt="Excluir"></a></td>
    </tr>
    <?php } ?>

  </table>
  </div>
</div>

<?php require('./modulos/footer.php')?> 