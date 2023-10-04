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
    echo "<h3>LISTAGEM DAS CONTAS</H3>";
    require "conexao.php";
    $sql="SELECT * FROM clientes ORDER BY nome";
    $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    echo "<table border='1' width='1000' align='center'>";
        echo "<tr>";
            echo "<th width='100' align='right'>Nome</th>";
            echo "<th width='300' align='left'>Agencia</th>";
            echo "<th width='100' align='left'>Banco</th>";
            echo "<th width='250' align='left'>Cpf</th>";
            echo "<th width='50' align='left'>Editar</th>";
        echo "<tr>";
        while($linha=mysqli_fetch_array($resultado))
        {
            $nome = $linha["nome"];
            $agencia = $linha["agencia"];
            $banco = $linha["banco"];
            $cpf =$linha["cpf"];
            echo "<tr>";
                echo "<td width='100' align='right'>$nome</td>";
                echo "<td width='300' align='left'>$agencia</td>"; 
                echo "<td width='100' align='left'>$banco</td>"; 
                echo "<td width='250' align='left'>$cpf</td>"; 
                echo "<td width='50'><a href='contas_editar.php?agencia=$agencia'>Editar</td>";
            echo "</tr>"; 
        }
    echo "</table>";
    ?>
</body>
</html>