<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadoes Matemáticos em PHP</title>
</head>
<body>
    <?php
        echo "<h3>OPERADORES MATEMÁTICOS EM PHP</h3>";
        $valor1 = 5; //Variável do tipo inteiro
        $valor2 = 2; //Variável do tipo inteiro
        $adicao = $valor1 + $valor2; //Efetua o cálculo das duas variáveis $valor1 e $valor2 e armazena na variável $adicao
        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "<h4>Cálculo do operador matemático soma</h4>";
        echo "<br>Valor 1: " ,$valor1;
        echo "<br>Valor 2: " ,$valor2;
        echo "<br>A soma é: " ,$adicao;

        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "<h4>Cálculo do operador matemático subtração</h4>";
        $subtracao = $valor1 - $valor2;
        echo "<br>A subtração é: " ,$subtracao;

        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "<h4>Cálculo do operador matemático multiplicação</h4>";
        $multiplicacao = $valor1 * $valor2;
        echo "<br>A multiplicação é: " ,$multiplicacao;

        echo "<hr align='left' color='#0000ff' width='350' size=3>";
        echo "<h4>Cálculo do operador matemático divisão</h4>";
        $divisao = $valor1 / $valor2;
        echo "<br>A divisão é: " ,$divisao;
        echo "<hr align='left' color='#0000ff' width='350' size=3>";

        echo "<h4>Exibindo o tipo da variável</h4>";
        echo var_dump($valor1) . " - <em>Variável valor1 é do tipo inteiro</br>";//Exibe o tipo da variável, nesse caso tipo inteiro
        echo var_dump($valor2) . " - <em>Variável valor1 é do tipo inteiro</br>";
    ?>
</body>
</html>