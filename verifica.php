<?php 

    require "conexao2.php";

    if(isset($_SESSION['idUsuario']) &&  !empty($_SESSION['idUsuario'])) {

        require_once "usuario.class.php";
        $u = new Usuario();

        $listalogado = $u->logado($_SESSION['idUsuario']);
        $nomeusuario = $listalogado['email'];

        $p = $u->perfil($_SESSION['idUsuario']);
        $perfil = $p['sit'];

    } else {
        header("Location: login.php");
    }

?>