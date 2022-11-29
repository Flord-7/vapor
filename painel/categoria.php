<?php
require('./modulos/top_menu.php');
$query_categorias = "SELECT id, nome FROM categoria";
 $categorias = mysqli_query($conn, $query_categorias); 
?>
<div class="pagina">
    <div class="botao">
      <a href="novo-categoria.php"><button class="botao-interno">Novo categoria</button></a>
  </div>
  <div class="tabela">
  <table>
    <tr>
      <th>categorias</th>
      <th class="intro" >Editar</th>
      <th class="intro" >Excluir</th>
    </tr>
    <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>
    <tr>
      <td class="icons"><?= $categoria['nome'] ?></td>
      <td class="icons" ><a href="editar-categoria.php?id=<?= $categoria['id'] ?>"><img src="./public/editar.png" alt="Editar"></a></td>
      <td class="icons" ><a href="excluir-categoria.php?id=<?= $categoria['id'] ?>"><img src="./public/lixeira.png" alt="Excluir"></a></td>
    </tr>
    <?php } ?>

  </table>
  </div>
</div>

<?php require('./modulos/footer.php')?> 