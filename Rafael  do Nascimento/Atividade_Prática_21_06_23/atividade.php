<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo "<table><h3>DADOS</h3>";
        echo "<form method='get' action='exibir.php'>";
            echo "<tr>";
                echo "<td><label for='nome'>Nome:</label></td>";
                echo "<td><input type='text' name='nome' required
                placeholder= 'Informe o nome' ></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td><label for='idade'>Idade:</label></td>";
                echo "<td><input type='number' name='idade' required
                placeholder='Informe a idade'></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td><label for='cidade'>Cidade:</label></td>";
                echo "<td><input type='text' name='cidade' required
                placeholder='Informe a cidade'></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td><label for='telefone'>Telefone:</label></td>";
                echo "<td><input type='text' name='telefone' required
                placeholder='Informe o número'></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td><label for='email'>Email:</label></td>";
                echo "<td><input type='text' name='email' required
                placeholder='Informe o email'></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td><label for='cpf'>CPF:</label></td>";
                echo "<td><input type='text' name='cpf' required
                placeholder='Informe o cpf'></td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td><input type='submit' name='cadastrar' value='Cadastrar' class='botao'></td>";
                echo "<td><input type='reset' name='limpar' value='Limpar'><td>";
                echo "<td><a href='index.html'>Sair</a></td>";
            echo "</tr>";
        echo "</table></form>";
        
    ?>
</body>
</html>