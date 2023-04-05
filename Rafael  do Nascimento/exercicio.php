<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor =<"Lavender">
    <?php
        echo "<h3>CÁLCULO DE MENSALIDADE</h3>";
        echo "<hr align=left color=#001111 width=50% size=3";
        $nome = "Rafael do Nascimento";
        $valor = 2500.0;
        $ano = 2023;
        $quantidade =5;
        $mensalidade = $valor / $quantidade;
        echo "<br><p><strong>Nome do aluno</strong>:"  ,"<i><strong>" ,$nome, "</strong></i>";
        echo "<br><p><strong>Valor do Curso:</strong>" ,"R$" , $valor;
        echo "<br><p><strong>Ano:</strong>" ,$ano;
        echo "<br><p><strong>Quantidade de Parcelas:</strong>" ,$quantidade;
        echo "<br><p><strong><u>Valor da Mensalidade:</strong></u>" , "R$" ,$mensalidade;
        echo "<br><p><h3><u>TIPOS DE VARIÁVEIS UTILIZADAS</H3></u>";
        echo var_dump($nome);
        echo var_dump($valor);
        echo var_dump($ano);
        echo var_dump($quantidade);
        echo var_dump($mensalidade);
    ?>
</body>
</html>