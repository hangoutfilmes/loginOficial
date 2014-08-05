<?php
 echo'<meta charset=UTF-8>';
 include_once 'conexao/conecta.inc';
 $email = isset($_POST['email']) ? $_POST['email']: null;
 $senha = isset($_POST['senha']) ? $_POST['senha']: null;
 $tipoUsuario = isset ($_POST['tipo']) ? $_POST['tipo']: null;
 $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'"; 
 $result = mysql_query($query);
 $totalUsuario = mysql_num_rows($result);
 
if ($totalUsuario === 0)
{
    echo '<a href=frmUsuario.php> Usuario não encontrado </a>';
    
}else{
    $usuarios = mysql_fetch_array($result);
    $senhaUsuario = $usuarios['SENHA_USUARIO'];
    $tipoUsuario = $usuarios['TIPO_USUARIO'];
    if($senha !== $senhaUsuario){
        echo '<a href=frmUsuario.php> Senha não confere! </a>';
    }else{
        session_start();
        $_SESSION ['email'] = $email;
        $_SESSION ['senha'] = $senha;
        $_SESSION ['tipoUsuario'] = $tipoUsuario;
        if($tipoUsuario ==='RES'){
            echo '<script type="text/javascript">
            location.href="indexrestrito.php"
            </script>';        
        }elseif ($tipoUsuario ==='ADM'){
            echo '<script type="text/javascript">
            location.href="indexadmin.php"
            </script>'; 
        }else {
            echo'Tipo de usuario inválido!';
        }
    }
}