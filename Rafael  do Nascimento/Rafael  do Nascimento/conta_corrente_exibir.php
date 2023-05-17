 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibir Conta Corrente</title>
  <link rel="stylesheet" href="estilos_cc.css">
</head>
<body style='background-color:lavender; color:maroon; font-size:20px;'>
  <?php
    echo "<h3>CONTROLE BANCÁRIO - CADASTRO DE CONTA CORRENTE</h3>";
    if($_SERVER['REQUEST_METHOD'] =='POST'){//VERIDICA SE FOI EFETUADP O CADASTRO DOS DADOS NO FORMULÁRIO DA CONTA CORRENTE
    $nome_correntista = $_POST["nome"];
    echo "<strong><br>Nome do Correntista: </strong>" . $nome_correntista;
    $banco = $_POST["banco"];
    if($banco == "#"){
    echo "<h3>Por Favor... selecione o banco!</h3>";
    echo "<p><a href='conta_corrente.html'>Cadastro de Conta Corrente</a></p>";
    return;
 }



    if($banco == "caixa"){
    echo "<br><strong>Cliente:</strong>Caixa Econômica Federal";
 }
    elseif($banco == "brasil"){
    echo "<br><strong>Cliente:</strong>Banco do Brasil";
 }
    elseif($banco == "mercantil"){
    echo "<br><strong>Cliente:</strong>Banco Mercantil";
 }
    elseif($banco == "santander"){
    echo "<br><strong>Cliente;</strong>Banco Santander";
 }
    elseif($banco == "bradesco"){
    echo "<br><strong>Cliente:</strong>Banco Bradesco";
 }
    $agencia = $_POST["agencia"];
    $conta = $_POST["conta_corrente"];
    $data_abertura = $_POST["data_abertura"];
    $saldo_inicial = $_POST["saldo_inicial"];
    $deposito = $_POST["deposito"];
    echo "<br><strong>Agência:</strong>" .$agencia;
    echo "<br><strong>Conta Corrente:</strong>" .$conta;
    echo "<br><strong>Data da Abertura:</strong>" .$data_abertura;
    echo "<br><strong>Saldo Inicial:</strong> R$" . number_format($saldo_inicial,2,",",".");
    echo "<br><strong>Depósito:</strong> R$" . number_format($deposito,2,",",".");
 }
    else
 {
    echo "<h3>Atenção... você tem que cadastrar os dados primeiro!</h3>";
    echo "<a href'conta_corrente.html'>Cadastro de Conta Corrente</a>";
 }
 ?>
</body>
</html>