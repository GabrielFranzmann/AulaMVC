<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuário efetuado</title>
    </head>
    <body>
         <h1>Resultado</h1><p>
        <?php
        if (isset($_GET['user']) && isset($_GET['mail'])) {
            echo '<br>Usuário:'.$_GET['user'] .
                 '<br>E-mail:'.$_GET['mail'];
        }
        ?>
    </body>
</html>
