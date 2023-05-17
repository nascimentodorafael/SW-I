<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efetua o cálculo e exibe a soma de 2 números</title>
    <style type="text/css">
        h3 {
            color:black;
            border-bottom:1px solid black;
            width:36%;
        }
    </style>
</head>
<body>
    <?php
        echo "<h3>Efetua o cálculo e exibe a soma de 2 números</h3>";
        //Recuperando os valores informados nas caixas num1 e num2
        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $numero3 = $_GET["num3"];
        $numero4 = $_GET["num4"];
        $numero5 = $_GET["num5"];
        $numero6 = $_GET["num6"];
        $numero7 = $_GET["num7"];
        $numero8 = $_GET["num8"];
        $soma1 = $numero1 + $numero2;
        $soma2 = $numero3 + $numero4 + $numero5 + $numero6 + $numero7 + $numero8;
        echo "Número 1: " . $numero1;
        echo "<br>Número 2: " . $numero2;
        echo "<br>Número 3: " . $numero3;
        echo "<br>Número 4: " . $numero4;
        echo "<br>Número 5: " . $numero5;
        echo "<br>Número 6: " . $numero6;
        echo "<br>Número 7: " . $numero7;
        echo "<br>Número 8: " . $numero8;
        echo "<hr>A soma é " . $soma1;
        echo "<hr>A soma é " . $soma2;
    ?>
</body>
</html>