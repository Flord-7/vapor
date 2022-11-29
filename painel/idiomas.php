<?php
require('./modulos/top_menu.php');
$query_idiomas = "SELECT id, nome FROM idioma";
 $idiomas = mysqli_query($conn, $query_idiomas); 
?>
<div class="pagina">
    <div class="botao">
      <a href="novo-idioma.php"><button class="botao-interno">Novo Idioma</button></a>
  </div>
  <div class="tabela">
  <table>
    <tr>
      <th>Idiomas</th>
      <th class="intro" >Editar</th>
      <th class="intro" >Excluir</th>
    </tr>
    <?php while ($idioma = mysqli_fetch_array($idiomas)) { ?>
    <tr>
      <td class="icons"><?= $idioma['nome'] ?></td>
      <td class="icons" ><a href="editar-idioma.php?id=<?= $idioma['id'] ?>"><img src="./public/editar.png" alt="Editar"></a></td>
      <td class="icons" ><a href="excluir-idioma.php?id=<?= $idioma['id'] ?>"><img src="./public/lixeira.png" alt="Excluir"></a></td>
    </tr>
    <?php } ?>

  </table>
    </div>
</div>

<?php require('./modulos/footer.php')?> 