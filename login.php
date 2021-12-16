<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Página de Login</title>
</head>
<body>

    <?php
        require "config.php";

        if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));

            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql = $pdo->query($sql);

            header("Location: index.php");

            
        }
    ?>

<div class="container">

    <h2>Efetue seu login</h2>

    <form action="" method="POST">
        <input  type="text" name="nome" placeholder="Login...">

        <input  type="password" name="senha" placeholder="Senha!">

        <input class="btn" type="submit" value="Acessar">
    </form>

    <p>Caso não seja cadastrado, <a href="cadastro.php">Clique aqui.</a> </p>
    


</div>
    
</body>
</html>

