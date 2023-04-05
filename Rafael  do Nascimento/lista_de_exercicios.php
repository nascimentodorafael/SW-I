<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercicios</title>
</head>
<body>
    <?php
        echo "<h1><font color='blue'>Controle de Gastos</font></h1>";

        $receita1 = 1000;
        $receita2 = 350;
        $despesa1 = 50;
        $despesa2 = 70;
        $despesa3 = 80;
        $despesa4 = 90;
        $despesa5 = 60;
        $despesa6 = 800;

        echo "<h2><font color='blue'>Receitas</font></h2>";
        echo "<font color='blue'>Receita1:</font></b>" , $receita1;
        echo "<br><font color='blue'>Receita2:</font></b>" , $receita2;



        echo "<h2><font color='blue'>Despesas</font></h2>";
        echo "<font color='blue'>Despesa1:</font></b>" , $despesa1;
        echo "<br><font color='blue'>Despesa2:</font></b>" , $despesa2;
        echo "<br><font color='blue'>Despesa3:</font></b>" , $despesa3;
        echo "<br><font color='blue'>Despesa4:</font></b>" , $despesa4;
        echo "<br><font color='blue'>Despesa5:</font></b>" , $despesa5;
        echo "<br><font color='blue'>Despesa6:</font></b>" , $despesa6;

        echo "<br><br>Receita1:" , $receita1;
        echo "<br>Receita2:" , $receita2;
        echo "<br><b><font color='blue'>Total das receitas:" , $receita1 + $receita2 , "</b></font>";
        
        echo "<hr align='left' width='930'>";
        
        echo "Despesa1:" , $despesa1;
        echo "<br>Despesa2:" , $despesa2;
        echo "<br>Despesa3:" , $despesa3;
        echo "<br>Despesa4:" , $despesa4;
        echo "<br>Despesa5:" , $despesa5;
        echo "<br>Despesa6:" , $despesa6;
        echo "<br><b><font color='red'>Total das despesas:" , $despesa1 + $despesa2 + $despesa3 + $despesa4 + $despesa5 + $despesa6 , "</b></font>";

        echo "<br><br><font color='blue'>Resultado:  Crédito" 

        
    ?>
</body>
</html>