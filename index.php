<?php
    require "./crb_controller.php";
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
    <nav class="navbar navbar-light" style="background-color: #fff0e6;">
    <div class="container-fluid">
        <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>
    <div class="container app" style="padding-top: 20px;">
        <img src="img/CRB-Logo-retina.png" width="300px" height="100px">
    </div>
    <div id="principal" class="container app">
        <label style="padding-top: 15px;"><b>Abertura de chamado</b></label>
            <hr/>
                <form action="enviar.php" name="form_contato" method="POST">
                    <div class="row">
                        <div class="col-md-3 menu">
                            <a>Selecione o departamento:</a>
                            <div class="mb-1">
                                <select class="form-select" name='setor'>
                                    <option value='1'>RH</option>
                                    <option value='2'>Financeiro</option>
                                    <option value='3'>Gestão de Risco</option>
                                    <option value='4'>Support T.I</option>
                                </select>
                            </div>

                            <a>Selecione a categoria:</a>

                            <!-- Puxa as categorias -->
                            <select class="form-select" name='categorias'>
                            </select>

                            <a>Telefone:</a>
                            <div class="mb-1">
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="(00) 00000-0000">
                            </div>
                            <a>Cidade:</a>
                            <div class="mb-1">
                                <select class="form-select" name='cidade'>
                                    <option value='1'>Sorocaba</option>
                                    <option value='2'>Campinas</option>
                                </select>
                            </div>
                            <a>Carregar imagem</a>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        </div>
                        
                        <!-- segunda coluna do preenchimento -->
                        <div class="col-md-6 menu">
                            <a>Título:</a>
                            <div class="mb-1">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titulo do chamado">
                            </div>

                            <a>Descrição:</a>
                            <div class="mb-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <button id="botao" type="submit">Enviar</button>
                        </div>

                        <!-- terceira coluna imagem -->
                        <div class="col-md-3 menu">
                            <div class="mb-1">
                                <img src="img/tt.png" width="90%" height="50%">
                            </div>

                        </div>
                    
                    </div>
                    
                    <!-- options que comunicam com o jquery para jogar dentro do select (categorias) -->
                    <div class="hidden categorias-f1">
                        <option value='12'>Relógio ponto</option>
                        <option value='13'>Carteira de trabalho</option>
                        <option value='14'>Atestado</option>
                        <option value='15'>Vale-transporte</option>
                        <option value='16'>VR-Refeição</option>
                    </div>

                    <div class="hidden categorias-f2">
                        <option value='17'>Reembolso</option>
                        <option value='18'>Salário</option>
                    </div>

                    <div class="hidden categorias-f3">
                        <option value='19'>Solicitação de EPI</option>
                        <option value='20'>Solicitação de usuario (GDFor)</option>
                        <option value='21'>Registrar incidente</option>
                    </div>      

                    <div class="hidden categorias-f4">
                        <option value='22'>Sistema</option>
                        <option value='22'>Hardware (Notebook,mouse...)</option>
                        <option value='22'>Impressora</option>
                        <option value='22'>Criação de usuário</option>
                        <option value='22'>E-mail</option>
                    </div>      
     
                </form>
    </div>

<script>
    //JQuery para esconder e manipular as subcategorias
    $(function(){

        $('.hidden').hide();
    
    $('select[name=categorias]').html($('div.categorias-f1').html());
        

        $('select[name=setor]').change(function(){ 
            var id = $('select[name=setor]').val();

            $('select[name=categorias]').empty();
            
            $('select[name=categorias]').html($('div.categorias-f' + id).html());

        });
        
    });
</script>

</body>
</html>