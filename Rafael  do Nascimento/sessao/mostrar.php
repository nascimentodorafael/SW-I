<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra os dados salvos na sessão</title>
    <link rel="stylesheet" href="sessao/estilos.css">
</head>
<body>
    <?php
        error_reporting(0);
        session_start();
        echo "<h3>EXIBE OS DADOS SALVOS NA SESSÃO</h3>";
        $nome = $_SESSION["nome"];
        $email = $_SESSION["email"];

        echo "<strong>Nome: </strong>" .$nome;
        echo "<br><strong>E-mail: <strong>" .$email;
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>
</html>