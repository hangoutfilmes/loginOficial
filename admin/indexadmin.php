<?php
echo '<meta charset="UTF-8">';
include_once '../includes/funcoesUteis.inc';
validaAutenticacao('../frmlogin.php');
echo '<h3> Sistema de Login - Home Page (Administrativo)</h3>';
echo '<a href=../logout.php?pg=index.php>Logout</a>';