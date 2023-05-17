<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 2 números utilizando formulário</title>
    <style type="text/css">
        h3 {
            color:Teal;
            border-bottom:1px solid teal;
            width:36%;
        }
        label, input {
            color:Navy;
            font-weight:bold;
            margin-left:5px;
        }
    </style>
</head>
<body>
    <?php
        echo "<form method='get' action='exibir_soma.php'>";
            echo "<p>";
                echo "<label for='numero1'>Receita1:</label>";
                echo "<input type='text' name='num1' size='4' maxlength='4'>";
            echo "</p>";
            echo "<p>";
            echo "<label for='numero2'>Receita2:</label>";
            echo "<input type='text' name='num2' size='4' maxlength='4'>";
        echo "</p>";
            echo "<p>";
                echo "<label for='numero1'>Despesa1:</label>";
                echo "<input type='text' name='num3' size='4' maxlength='4'>";
            echo "</p>";
            echo "<p>";
            echo "<label for='numero2'>Despesa2:</label>";
            echo "<input type='text' name='num4' size='4' maxlength='4'>";
        echo "</p>";
            echo "<p>";
                echo "<label for='numero1'>Despesa3:</label>";
                echo "<input type='text' name='num5' size='4' maxlength='4'>";
            echo "</p>";
            echo "<p>";
            echo "<label for='numero2'>Despesa4:</label>";
            echo "<input type='text' name='num6' size='4' maxlength='4'>";
        echo "</p>";
        echo "</p>";
        echo "<p>";
            echo "<label for='numero1'>Despesa5:</label>";
            echo "<input type='text' name='num7' size='4' maxlength='4'>";
        echo "</p>";
        echo "<p>";
        echo "<label for='numero2'>Despesa6:</label>";
        echo "<input type='text' name='num8' size='4' maxlength='4'>";
    echo "</p>";
    echo "<form>";

    echo "<p>";
    echo "<input type='submit' name='somar' value='Somar'>";
    ?>
</body>
</html>