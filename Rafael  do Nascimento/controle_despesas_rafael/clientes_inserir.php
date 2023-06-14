<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>CADASTRO DE CLIENTES</h3>
    <form name="cadastro" method="post" action="">
    <table>
    <tr>
       <td><label for="nome">Nome:</label></td>
       <td><input type="text" name="nome" size="48" maxlength="40" placeholder>
    </tr>
    <tr>
       <td><label for="cidade">Cidade: </label></td>
       <td><input type="text" name="cidade" size="30" maxlength="30" required>
    </tr>
    <tr>
       <td><label for="cpf">CPF:</label></td>
       <td><input type="text" name="cpf" size="14" maxlength="14" required>
    </tr>
    <tr>
       <td><label for="email">E-mail:</label></td> 
       <td><input type="email" name="email" size="30" maxlength="30" required>
    </tr>
    <tr>
       <td><label for="contato">Contato:</label></td> 
       <td><input type="text" name="contato" size="15" maxlength="25" required>
    </tr>
    </table>
    </form>
</body>
</html>