<?php

require "verifica.php";

require_once "usuario.class.php";
$u = new Usuario();
$mudar_senha = $u->mudarsenha($_SESSION['idUsuario'], $_POST['nova_senha']);

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- CSS estilos.css -->
<link rel="stylesheet" href="estilo.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <div class="alert alert-success" role="alert">
            Senha alterada com sucesso !
        </div>

        <a style="padding-left: 20px;" href="login.php"><button type="button" class="btn btn-success">Voltar</button></a>

 
