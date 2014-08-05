<?php
echo '<meta charset="UTF-8">';
include_once 'includes/funcoesUteis.inc';
validaAutenticacao ('frmLogin.php', 'RES');
echo '<h3> Sistema de Login - Home Page (Restrito)</h3>';
echo '<a href=logout.php?pg=index.php>Logout</a>';

