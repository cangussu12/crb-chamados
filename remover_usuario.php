<?php

require "verifica.php";

require_once "usuario.class.php";

$u = new Usuario();
$id = (int)$_POST['id'];
$remover = $u->remover($id);
header("Location: usuarios.php");

?>
