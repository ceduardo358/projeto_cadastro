<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>

    <?php
        session_start();

        if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
            echo "Área restrita...";
        } else {
            header("Location: login.php");
        }

    ?>
    <h2>Realize o Login!</h2>

    <a href="login.php">Fazer login!</a> <br>
    <a href="cadastro.php">Quero me Cadastrar!</a>

    
</body>
</html>