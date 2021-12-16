<?php
    $conect = "mysql:dbname=cadastros;host=localhost";
    $user = "root";
    $senha = "";

    try {
        $pdo = new PDO($conect, $user, $senha);

       
    } catch(PDOException $e) {
        echo "Falhou a conexão: ".$e->getMessage();
    }


?>