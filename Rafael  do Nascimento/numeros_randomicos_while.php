<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números randômicos utilizando Looping While</title>
</head>
<body>
    <?php
        echo "<h2>NÚMEROS RÂNDOMICOS COM WHILE</h2>";
        $numero = 0;
        $cont = 1;
        while($cont < 20)
        {
            $numero = rand(1,200);
            echo "Este é o n" . "° " . $numero . "<br>";
            $cont++;
            
        }
    ?>
</body>
</html>