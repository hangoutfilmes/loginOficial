<?php
echo '<meta charset=UTF-8>';
$servidor = 'localhost';
$usuario = 'root';
$senha = '12345678';
$banco = 'loginoficialdb';

$connection = mysql_connect($servidor,$usuario,$senha);
if($connection === FALSE)
{
    echo 'Não foi possivel a conexão com o Mysql <br/>';
    echo mysql_error();
} else {
    $connection_Db = mysql_select_db($banco,$connection);
    if(!$connection_Db){
        echo 'Não foi possivel selecionar o banco' . $banco. '<br/>';
        echo mysql_error();
    }
}