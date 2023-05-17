<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>Dados</h3>";
        if($_SERVER['REQUEST_METHOD'] =='GET')
        $nome = $_GET["nome"];
        if($_SERVER['REQUEST_METHOD'] =='GET')
        $idade = $_GET["idade"];
        if($_SERVER['REQUEST_METHOD'] =='GET')
        $cidade = $_GET["cidade"];
        if($_SERVER['REQUEST_METHOD'] =='GET')
        $telefone = $_GET["telefone"];
        if($_SERVER['REQUEST_METHOD'] =='GET')
        $email = $_GET["email"];

        echo "Nome: " . $nome;
        echo "<br>Idade: " . $idade;
        echo "<br>Cidade: " . $cidade;
        echo "<br>Telefone: " . $telefone;
        echo "<br>Email: " . $email;
    ?>
</body>
</html>