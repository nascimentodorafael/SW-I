<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre as funções Require e Incluse</title>
</head>
<body>
    <?php
        include "cabecario.php";

        include "rodape.php";
    ?>
    
    <form name="string" method="post" action="">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" maxLength="50" size="40" required
            placeholder="Informe seu nome completo">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="nome" size="30" maxLength="30" required>
        </p>
        <p>
            <input type="submit" name="mostrar" value="Mostrar">
        </p>
    </form>
    <?php
        if(isset($_POST["mostrar"]))
        {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            echo "<p>Converte para MAIÚSCULAS</p>";
            echo "Nome: " . strtoupper($nome);
            echo "<p>Converte para MINÚSCULAS</p>";
            echo "<p>E-mail: " . strtolower($email) ; "</p>";
        }

        require "rodape.php";
    ?>

    <p><a href="index.php">Voltar
</body>
</html>