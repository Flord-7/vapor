<?php
require('autenticacao.php');
require('conexao.php');
?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/scripts.js"></script>
    <title>Vapor - Dashboard</title>
</head>

<body>
    <div id="container-pai">
        <?php require('side_menu.php'); ?>

        <div id="sub_container">
            <div id="cabecalho">
                <div id="nome">Dashboard</div>
                    <div id="mensagem">Seja Bem Vindo, Victor! - <div id="clock"> </div>
                </div>
            </div>

            <script>
                updateClock()
            </script>