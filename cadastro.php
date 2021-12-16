<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="castro.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
        require 'config.php';

       if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));

            $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
            $sql = $pdo->query($sql);

            header("Location: login.php");
        }

    ?>

    <div class="container">
        <h2>Efetue seu Cadastro</h2>

        <form action="" method="POST">
            <input  type="text" name="nome" placeholder="Digite seu nome!" required>

            <input type="email" name="email" placeholder="Digite seu E-mail!" required>

            <input  type="password" name="senha" placeholder="Digite uma senha!" required>

            <input class="btn" type="submit" value="Cadastrar" onclick="cadastrado()">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>