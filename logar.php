<?php

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        
        require 'conexao2.php';
        require 'usuario.class.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if($u->login($email, $senha) == true){
            if(isset($_SESSION['idUsuario'])) {
                header("Location: usuarios.php");
            }
        } else {
            header("Location: login.php");
        }
    } else {
        header("Location: login.php");
    }



?>