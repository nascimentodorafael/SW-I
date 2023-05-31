<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Login</title>
</head>
<body>
    <h3>VERIFICA LOGIN</h3>
    <?php
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        session_start();
        $_SESSSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;

        echo "<a href='principal.php'>Acesso Permitido</a>";
    ?>
</body>
</html>