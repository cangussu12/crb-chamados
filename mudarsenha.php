<?php
    require "verifica.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamados CRB</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <h5 class="text-white h4">CRB Construtora</h5>
        <span class="text-muted">Abertura de chamado</span>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <nav style="text-align: right; padding-right: 30px; padding-top:5px;">
        <a href="encerrar_sessao.php">
            <button type="button" class="btn btn-secondary">SAIR</button>
        </a>
    </nav>
</head>


<body>
    <div class="container app" style="padding-top: 20px;">
        <img src="img/crb-logo.png" width="250px" height="80px" disabled>
        <div style="text-align: right;">
    </div>
            
    <div id="principal" class="container app">
    
        <label style="padding-top: 12px;"><b>Alteração de senha</b></label>

            <hr/>
                <form action="mudarsenha_acao.php" name="form_contato" method="POST">
                    <div class="row">
                        <div class="col-md-3 menu">
                            <a style="font-size: 12px;">Identificamos que a sua senha é padrão. <p>Inserira uma nova senha:</p></a>
                            <div class="mb-2">
                                <input class="form-control" type="text" placeholder="<?php  
                                        //mostra o nome do usuário
                                        $str = $nomeusuario;
                                        $s = explode("@",$str);
                                        array_pop($s); #remove last element.
                                        $s = implode("@",$s);
                                        print $s;
                                    ?>" disabled>  
                                    </input>
                            </div>
                            <div class="mb-2">
                                <input name="nova_senha" type="password" class="form-control" placeholder="Nova senha">
                            </div>
                            <button id="logar" type="submit">Confirmar</button>
                        </div>
                    </div>
                </form>