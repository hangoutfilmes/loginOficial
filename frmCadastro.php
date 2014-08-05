<!doctype html>
<title> Cadastro Usuario</title>
'<meta charset=UTF-8>'
 


</script>
<head>
<body>
<h1> Cadastro de usuario </h1>
<form id=”meu_form” action="frmNovoUsuario.php" method="post" >

    <--Login:<br />-->
<label> Digite um email válido </label> <br/>
<input type ="text" name="login"  id="login"/>
<br/>
<label> Confirme o email</label> <br/>
<input type ="text" name="conlogin"  id="conflogin"/>
<br/>
Senha: <br/>
<input type ="password" name="senha"  id="senha"/><br/>
<label> Confirme o senha</label> <br/>
<input type ="checkbox" name="termos" id="termos"> <br/>
<input type ="submit" value="Cadastrar" />
</form>
<br/><br/>


<div class="loader" style="display:  none ;"> <img src=”images/loader.gif”  alt=”Carregando” /></div>

</body>
</html>