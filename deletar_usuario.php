<?php

require "./verifica.php";

require_once "usuario.class.php";
$u = new Usuario();
$uu = $u->remover($id);



?>