<?php

    require "verifica.php";

?>

<?php if ( $perfil == 2) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- CSS para os icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <h5 class="text-white h4">CRB Construtora</h5>
        <span class="text-muted">Abertura de chamado</span>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Usuarios</title>
</head>
<body>
    <?php
        require_once "usuario.class.php";
        $u = new Usuario();
        $lista_usuarios = $u->usuarios();

?>


<div class="container app" style="padding-top: 20px;">
        <img src="img/crb-logo.png" width="250px" height="80px">
        <div style="text-align: right;">
    </div>

    <div id="" class="container app">
        
        <label style="padding-top: 12px;"><b>Usuarios cadastrados no sistema</b></label>
        <a style="padding-left: 15px;" href="index.php"> <button id="logar" type="submit">Voltar</button></a>
        <a href="novo_usuario.php"><button type="button" id="logar">Adicionar</button></a>
            <hr/>

            <div class="row">
                <div class="col-md-12 menu">
                    <div class="mb-1">
                            <div class="container">
                            <div class="row row-cols-4" style="text-align: center;">
                                    <div class="col">
                                    <b>E-mail</b>
                                    </div>
                                    <div class="col">
                                    <b>Senha</b>
                                    </div>
                                    <div class="col">
                                    <b>Perfil de acesso</b>
                                    </div>
                                    <div class="col">
                                    <b>Ação</b>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            
                        <?php foreach ($lista_usuarios as $usuarios => $usuario) { ?>
                            <div class="container" style=" padding-top:8px;">
                            <div class="row row-cols-4" style="text-align: center; font-size:13px; border-radius:5px; background-color: rgb(245, 245, 245); padding-top:10px; padding-bottom:10px">
                                <div class="col">
                                    <?php echo $usuario['email']?>
                                </div>
                                <div class="col">
                                    <?php echo $usuario['senha']?>
                                </div>
                                <div class="col">
                                    <?php 
                                        $usuario['sit'];
                                        if ($usuario['sit'] == 1) {
                                            echo 'usuario';
                                        } else {
                                            echo 'Administrador';
                                        }
                                    ?>
                                </div>
                                <div class="col">
                                        <i onclick="remover(<?php $usuario['id'] ?>)" class="fas fa-trash-alt fa-lg text-danger"></i>
                                        <!--<i class="fas fa-edit fa-lg text-info"></i> -->
                                </div>
                            </div>
                            </div>

                
                           <?php } ?>

                    </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>

<?php } else
    echo 'você não tem permissão para acessar essa pagina !';
?>