<?php

$email = $_GET['login'];
//$email = 'simone@hotmail.com';
$servidor = 'localhost';
$usuario = 'root';
$senha = 'adorocinema';
$banco = 'logintccdb';

$connection = mysql_connect ($servidor, $usuario, $senha);
$connection_Db = mysql_select_db ($banco, $connection);
//montando e executando a query de consulta
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO= '$email'";
$result = mysql_query ($query);
//montamdo uma matriz para armazenar os emails cadastrados no banco de dados 
$emailsCadastrados = array();
while ($usuarios = mysql_fetch_assoc($result))
{
    $emailBanco = $usuarios ['EMAIL_USUARIO'];
    $emailsCadastrados[] = $emailBanco;
}

// A função in_array, verifica se existe um determinado elemento dentro de uma matriz.
// A função recebe dois parâmetros: o "valor pesquisado" e a "matriz de elementos"
// Veja:

if (in_array ($email, $emailsCadastrados))
{
    echo 'false';
}
else {
    echo 'true';
}
exit();
