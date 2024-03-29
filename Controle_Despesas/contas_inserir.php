<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="estilos_formulario.css">
</head>
<body>
    <?php
    require "menu.php";
    ?>
    <div id="cadastro">
        <h3>CADASTRO DE CONTAS</h3>
        <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label for="nome">Nome:</label></td>
                    <td><input type="text" name="nome" size="40" maxlength="40" placeholder="Informe seu nome completo" required>
                </tr>
                <tr>
                    <td><label for="agencia">Agência:</label></td>
                    <td><input type="text" name="agencia" size="20" maxlength="20" required>
                </tr>
                <tr>
                    <td><label for="banco">Banco:</label></td>
                    <td><input type="text" name="banco" size="50" maxlength="50" required>
                </tr>
                <tr>
                    <td><label for="corrente">Corrente:</label></td>
                    <td><input type="text" name="corrente" size="30" maxlength="30" required>
                </tr>
                <tr>
                    <td><label for="cpf">Cpf:</label></td>
                    <td><input type="text" name="cpf" size="15" maxlength="15" required>
                </tr>
                <tr>
                    <td><label for="tipo">Tipo:</label></td>
                    <td><input type="name" name="tipo" size="15" maxlength="15" required>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="cadastrar" value="Cadastrar">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST["cadastrar"])) {
            $nome           = $_POST["nome"];
            $agencia        = $_POST["agencia"];
            $cpf            = $_POST["cpf"];
            $banco          = $_POST["banco"];
            $corrente       = $_POST["corrente"];
            $cpf            = $_POST["cpf"];
            $tipo           = $_POST["tipo"];
            require "conexao.php";
            $sql = "INSERT INTO contas(codigo, nome, cidade, cpf, email, contato, DataNascimento)";
            $sql .= " VALUES (null, '$nome', '$cidade', '$cpf', '$email', '$contato', '$DataNascimento')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Cliente cadastrado com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
        ?>
    </div>
</body>
</html>