<?php
$host  = "localhost"; // Servidor Local
$user  = "root"; // Usuário do servidor
$pass  = ""; // Senha do banco de dados
$banco = "bddespesas_rafael"; // Nome do banco

// Faz a conexâo com o banco de dados, caso nâo conseguir será apresentada mensagem de erro pelo comando mysqli_error
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error($conexao));

mysqli_select_db($conexao, $banco);
?>