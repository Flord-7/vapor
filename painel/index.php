<?php 

$error_message = $_GET['error'] ?? null;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/scripts.js"></script>
    
    <title>Vapor - Admnistrador - Login</title>
</head>

<body onclick="removerElementoPorId('erro-mensagem')">
    <div class="container">
        <div id="forma-login">
            <form action="./login.php" method="POST">
                <img src="./public/videogame.png" alt="Logo" width="100px">
                <div class="info-login">
                    <div class="coluna">
                        <input placeholder="E-mail" type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="info-login">
                    <div class="coluna">
                        <input placeholder="Senha" type="password" name="password" id="password" required>
                    </div>
                </div>
                <button id="botao-login" type="submit">LOGAR</button>

                <?php if($error_message != null) { ?>
                    <div  class="error-message" id= "erro-mensagem" ><?=$error_message?></div>
                <?php } ?>
            </form> 
        </div>
    </div>
</body>

</html>