<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes - Editar</title>
    <link rel="stylesheet" href="estilos_menu.css">
</head>
<body>
    <?php
        require "menu.php";
        echo "<h3>Editar Cadastro de Clientes</h3>";
        require "conexao.php";
        $codigo = $_REQUEST["codigo"];
        $sql = "SELECT * FROM clientes WHERE codigo='$codigo'";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        $linha = mysqli_fetch_array($resultado);
        $codigo = $linha["codigo"];
        $nome = $linha["nome"];
        $cidade = $linha["cidade"];
        $cpf = $linha["cpf"];
        $email = $linha["email"];
        $contato = $linha["contato"];
        echo "<form name ='cadastro' method ='post' action =''>";
        echo "table border ='1' align='center'>";
            echo "<tr>";
              echo "<td><label> for='codigo'>Código:</td>";
              echo "<td>input type = 'text' name ='codigo' value='$codigo' size='4' readonly </td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td><label for ='nome'>Nome:</td>";
              echo "<td><input type='text' name='nome' size='50' maxLength='50' value='$nome' required</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td><label for ='cidade'>Cidade:</td>";
              echo "<td><input type='text' name='cidade' size='30' maxLength='30' value='$cidade' required</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td><label for ='cpf'>CPF:</td>";
              echo "<td><input type='text' name='cpf' size='14' maxLength='14' value='$cpf' required</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td><label for ='email'>E-mail:</td>";
              echo "<td><input type='text' name='email' size='30' maxLength='30' value='$email' required</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td><label for ='contato'>Contato:</td>";
              echo "<td><input type='text' name='contato' size='15' maxLength='15' value='$contato' required</td>";
            echo "</tr>";
            echo "<tr>";
              echo "<td colspan ='2' align='center'><input type='submit' name='atualizar' value='Atualizar'
              </td>";
            echo "</tr>";
        echo "</table>";
        echo "</form>";
        if(isset($_POST["atualizar"]))
        {
            $nome = $_POST["nome"];
            $cidade = $_POST["cidade"];
            $cpf = $_POST["cpf"];
            $email = $_POST["email"];
            $contato = $_POST["contato"];
            require "conexao.php";
            $sql = "UPDATE clientes set nome='$nome' , cidade='$cidade' , cpf='$cpf' , email='$email' , contato='$contato' WHERE codigo='$codigo'";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type = \"text/javascript\">alert('Cliente atualizado com sucesso!');</script>";
            echo "<meta http-equiv='refresh' content='0; url=home.php'>";
        }
    ?>
</body>
</html>