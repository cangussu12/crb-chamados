<?php
require "./verifica.php";

require_once "usuario.class.php";

$u = new Usuario();
if ($u->logado($_SESSION['idUsuario'])){

    session_destroy();
    header("Location: login.php");
}

?>