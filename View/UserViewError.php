<!DOCTYPE html>

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuário com Erro</title>
    </head>
    <body>
        <h1>Erro</h1>
        <?php
            if (isset($_GET['erros'])) {
                $erros = array();
                $erros = unserialize($_GET['erros']);
                
                foreach ($erros as $e) {
                    echo '<br />'  .$e;
                }
            }
        ?>
    </body>
</html>
