<?php
require('./modulos/top_menu.php');
$query_plataformas = "SELECT id, nome FROM plataforma";
 $plataformas = mysqli_query($conn, $query_plataformas); 
?>
<div class="pagina">
    <div class="botao">
      <a href="novo-plataforma.php"><button class="botao-interno">Novo plataforma</button></a>
  </div>
  <div class="tabela">
  <table>
    <tr>
      <th>plataformas</th>
      <th class="intro" >Editar</th>
      <th class="intro" >Excluir</th>
    </tr>
    <?php while ($plataforma = mysqli_fetch_array($plataformas)) { ?>
    <tr>
      <td class="icons"><?= $plataforma['nome'] ?></td>
      <td class="icons" ><a href="editar-plataforma.php?id=<?= $plataforma['id'] ?>"><img src="./public/editar.png" alt="Editar"></a></td>
      <td class="icons" ><a href="excluir-plataforma.php?id=<?= $plataforma['id'] ?>"><img src="./public/lixeira.png" alt="Excluir"></a></td>
    </tr>
    <?php } ?>

  </table>
  </div>
</div>

<?php require('./modulos/footer.php')?> 