<?php 
    $titulo_pagina = "Suporte";
    $mensagem = $_GET['sucesso'] ?? null;

    
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php') ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php') ?>
            <div id="content">
                <div id="header">SUPORTE</div><br>
                <div id="form">
                    <form action="cadastrar-suporte.php" method="post">
                    <div id="suporte-mensagem">
                        <label for="nome" id="header">Nome do Usuário:</label><br>
                        <input type="text" placeholder="Nome:" class="suporte-input" name="nome" required><br><br>

                        <label for="email" id="header">E-mail do Usuário:</label><br>
                        <input type="email" class="suporte-input" placeholder="E-mail:" name="email" required><br><br>

                        <select name="assunto" id="suport-select" required>
                            <option class="op-suporte" value="" selected disabled>Sugestão</option>
                            <option value="critica">Crítica</option>
                            <option value="elogio">Elogio</option>
                            <option value="duvidas">Dúvidas</option>
                            <option value="suporte">Suporte</option>
                            <option value="outros">Outros</option>

                        </select><br>
                        <br>

                        <label for="mensagem" id="header">Mensagem do Usuário:</label><br>
                        <textarea name="mensagem" id="mensagem" placeholder="Mensagem:" cols="30" rows="10" required ></textarea>

                        <div id="botao-suporte">
                            <button id="button-suporte">Enviar</button>
                        </div><br><br>

                        <?php if($mensagem != null) { ?>
                            <div id="mensagem-sucesso">
                                <div id="sucesso"><?=$mensagem?></div>
                            </div>
                        <?php } ?>

                        </div>

                        

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>