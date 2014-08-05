<?php
echo '<meta charset=UTF-8>';
include_once 'classes/Bycript.class.php';
include_once 'conexao/conecta.inc';

$nome  = $_POST ['nome'];
$email = $_POST ['login'];
$senha = $_POST ['senha'];
$tipo = 'RES';
$senha = Bcrypt::hash($senha);

$query = "INSERT INTO usuario (NOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO,TIPO_USUARIO)";
$query.= "VALUES('$nome', '$email', '$senha', '$tipo')";

if(mysql_query($query))
{
    echo '<script> alert("Usuário Cadastrado com sucesso !")</script>';
    echo '<a href=frmlogin.php>Efetuar Login</a>';
}else{
    echo mysql_error();
}
