<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando Switch - Dia da Semana</title>
    <style>
        body {
            font-family: Verdana,Arial;
            background-color: Lavender;
        }
        h2 {
            border-bottom:2px dashed Black;
        }
        p {
            color:SlateGray;
        }
        marquee {
            width:300px;
            font-size:25px;
            font-weight:700;
            font-style:italic;
            background-color:Peru;
            color:MidnightBlue;
            border:3px solid LightGreen
        }
    </style>
</head>
<body>
    <?php
        echo "<h2 align='center'>DIA DA SEMANA - SWITCH... CASE</H3>";
        $numero_Dia_Semana = date("w");
        echo "<p><strong>Dia da semana: $numero_Dia_Semana</strong></p>";
        $Dia_Semana_Extenso="";
        switch ($numero_Dia_Semana)
        {
            case 0:
                $Dia_Semana_Extenso = "Domingo";
                break;
            case 1:
                $Dia_Semana_Extenso = "Segunda-Feira";
                break;
            case 2:
                $Dia_Semana_Extenso = "Terça-Feira";
                break;
            case 3:
                $Dia_Semana_Extenso = "Quarta-Feira";
                break;
            case 4:
                $Dia_Semana_Extenso = "Quinta-Feira";
                break;
            case 5:
                $Dia_Semana_Extenso = "Sexta-Feira";
                break;
            case 6:
                $Dia_Semana_Extenso = "Sábado";
                break;
            default:
                $Dia_Semana_Extenso = "Erro... dia da semana inválido!";
        }
        echo "<p><strong>Hoje é </strong>". "<em>$Dia_Semana_Extenso</em></p>";
        echo "<p><marquee direction='right'>Dia de Descansar</marquee></p>";
        echo "<p><marquee behavior='alternate'>Seja bem-vindes</marquee></p>";
    ?>
</body>
</html>