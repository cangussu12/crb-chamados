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

</head>


<body>
    <div class="container app" style="padding-top: 20px;">
        <img src="img/crb-logo.png" width="250px" height="80px" disabled>
        <div style="text-align: right;">
    </div>
    
    <br />
            
    <div id="principal" class="container app">
    
        <label style="padding-top: 12px;"><b>Abertura de chamado</b></label>
        <?php
        if ($perfil == 2) { ?>
            <a style="padding-left: 30px;" href="usuarios.php"><button type="button" id="logar">Administração</button></a>
       <?php } ?>
            <hr/>
                <form action="enviar.php" name="form_contato" method="POST">
                    <div class="row">
                        <div class="col-md-3 menu">
                            <a style="font-size: 13px">Selecione o departamento:</a>
                            <div class="mb-1">
                                <select class="form-select" name='setor'>
                                    <option value='1'>RH</option>
                                    <option value='2'>Financeiro</option>
                                    <option value='3'>Gestão de Risco</option>
                                    <option value='4'>Support T.I</option>
                                </select>
                            </div>

                            <a style="font-size: 13px">Selecione a categoria:</a>
                            <!-- Puxa as categorias -->
                            <select class="form-select" name='categorias'>
                            </select>

                            <a style="font-size: 13px">Telefone:</a>
                            <div class="mb-1">
                                <input class="form-control" id="exampleFormControlInput1" placeholder="(00) 00000-0000" onkeypress="$(this).mask('(00) 00000-0000')">
                            </div>
                            <a style="font-size: 13px">Cidade:</a>
                            <div class="mb-1">
                                <select class="form-select" name='cidade'>
                                    <option value='Sorocaba'>Sorocaba</option>
                                    <option value='Campinas'>Campinas</option>
                                </select>
                            </div>
                            <a style="font-size: 13px">Local:</a>
                            <div class="mb-1">
                            <select class="form-select" name='local'>
                                    <option value='Infinity Office'>Infinity Office</option>
                                    <option value='Hemisphere Office'>Hemisphere Office</option>
                                    <option value='Obra Figueira'>Obra Figueira</option>
                                    <option value='Obra Origem'>Obra Origem</option>
                                    <option value='Obra Lúmio'>Obra Lúmio</option>
                                    <option value='Obra LeMonde'>Obra LeMonde</option>
                                    <option value='PDV Lumio'>PDV Lúmio</option>
                                    <option value='PDV Figueira'>PDV Figueira</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- segunda coluna do preenchimento -->
                        <div class="col-md-6 menu">
                            <a style="font-size: 13px">Título:</a>
                            <div class="mb-1">
                                <input name="titulo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titulo do chamado">
                            </div>

                            <a style="font-size: 13px">Descrição:</a>
                            <div class="mb-6">
                                <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <button id="botao" type="submit">Enviar</button>
                        </div>

                        <!-- terceira coluna imagem -->
                        <div class="col-md-3 menu">
                            <div class="mb-1">
                                <!-- Mensagem de olá + usuario -->
                                <label style="font-size: 13px">
                                    Olá,                                
                                    <?php  
                                        $str = $nomeusuario;
                                        $s = explode("@",$str);
                                        array_pop($s); #remove last element.
                                        $s = implode("@",$s);
                                        print $s;
                                    ?>
                                    !
                                </label>
                                <img src="img/tt.png" width="90%" height="20%" disabled>
                            </div>
                            
                            <a style="font-size: 13px">Carregar imagem</a>
                            <div class="input-group mb-2" style="padding-top:5px">
                                <input name="upload" type="file" class="form-control">
                            </div>

                        </div>
                    
                    </div>
                    
                    <!-- options que comunicam com o jquery para jogar dentro do select (categorias) -->
                    <div class="hidden categorias-f1">
                        <option value='Relogio ponto'>Relógio ponto</option>
                        <option value='Carteira de trabalho'>Carteira de trabalho</option>
                        <option value='>Atestado'>Atestado</option>
                        <option value='Vale-transporte'>Vale-transporte</option>
                        <option value='VR-Refeição'>VR-Refeição</option>
                    </div>

                    <div class="hidden categorias-f2">
                        <option value='Reembolso'>Reembolso</option>
                        <option value='Salário'>Salário</option>
                    </div>

                    <div class="hidden categorias-f3">
                        <option value='Solicitação de EPI'>Solicitação de EPI</option>
                        <option value='Solicitação de usuario (GDFor)'>Solicitação de usuario (GDFor)</option>
                        <option value='Registrar incidente'>Registrar incidente</option>
                    </div>      

                    <div class="hidden categorias-f4">
                        <option value='Sistema'>Sistema</option>
                        <option value='Hardware (Notebook,mouse...)'>Hardware (Notebook,mouse...)</option>
                        <option value='Impressora'>Impressora</option>
                        <option value='Criação de usuário'>Criação de usuário</option>
                        <option value='E-mail'>E-mail</option>
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

   <!-- mascara telefone -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</body>
</html>