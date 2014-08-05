<?php

function validaAutenticacao($link,$tipo)
{
    echo '<meta charset=UTF-8>';
    include_once'classes/Bycript.class.php';
    session_start();
    if (!isset($_SESSION['email']) or !isset($_SESSION['senha'])){
        session_destroy();
        echo'<script>
        alert("Acesso Negado !/n Você não efetuou login.")
        location.href="'.$link.'"
        </script>';
        
    }else{
    if($tipo=== 'RES'){include_once 'conexao/conecta.inc';}
    if($tipo=== 'ADM'){include_once '../conexao/conecta.inc';}
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $query ="SELECT * FROM usuario WHERE EMAIL_USUARIO=' $email'";
    $result= mysql_query ($query);
    $totalUsuario= mysql_num_rows($result);
    if($totalUsuario  !== 0){
        $usuarios = mysql_fetch_assoc($result);
        $senhaBanco = $usuarios['SENHA_USUARIO'];
        $tipoBanco = $usuarios['TIPO_USUARIO'];
            if(!Bcrypt::check($senha,$senhaBanco)){
                session_destroy();
                echo'<script>
                alert ("Acesso Negado !\n Sua Senha nao conferer.")
                location.href="'.$link.'"
                        </script>';
                             }
    }else{
        session_destroy();
        echo'<script>
                alert ("Acesso Negado !\n Email nao confere.")
                location.href="'.$link.'"
                        </script>';
    }
    if($tipo !== $tipoBanco){
        session_destroy();
        echo'<script>
                alert ("Acesso Negado !\n Você não tem permissão de Acesso.")
                location.href="'.$link.'"
                        </script>';
    }
    }
    
}


