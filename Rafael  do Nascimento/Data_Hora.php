<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Data e Hora em PHP</title>
</head>
<body>
    <?php
        echo "<h3>DATA E HORA EM PHP</h3>";
        //Extraindo o dia, o mês, eo ano
        $dia = date("d"); //Extrai o dia da função date
        $mes = date("M"); //Extrai o mês da função date        
        $ano = date("y"); //Extrai o ano da função date
        
        echo "<h4>Exibe a data do sistema operacional</h4>";
        echo "Hoje é  $dia, de $mes, de $ano";

        //Extaraindo a hora, o minuto, e o segundo
        $hora = date("h");
        $minuto = date("i");
        $segundo = date("s");
        echo "<h4>Exibe a hora do sistema operacional</h4>";
        echo "Agora é ,$hora horas, $minuto minutos e $segundo segundos";

    ?>
</body>
</html>