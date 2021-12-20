<?php

$setor = $_POST['setor'];
$categorias = $_POST['categorias'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$local = $_POST['local'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$upload = $_POST['upload'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

if ($setor = '1') {
    $setor = 'RH';
} elseif ($setor = '2') {
    $setor = 'Financeiro';
} elseif ($setor = '3') {
    $setor = 'Gestão de Risco';
} elseif ($setor = '4') {
    $setor = 'Support T.I';
}



// Compo E-mail
$arquivo = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>

      <table>
      <td class='mostra' width='300'>Teste</td>
      </table>
      
      <table class='formpronto' width='310' border='0' cellpadding='1' cellspacing='1'>
            <td class='logo'>
                <img src='./img/crb-logo.png', width='310'/>
            </td>
      </table>
      
            <table class='formpronto' width='310' border='1' cellpadding='1' cellspacing='1'>
               <td class='mostra' width='125'><center><b>Setor: </b></center></td><td width='185'><center>$setor</center></td>
            <tr>
                <td class='mostra'  width='125'><center><b>Categoria: </b></center></td><td width='185'><center>$categorias<center></td>
    <tr>
                <td class='mostra'  width='125'><center><b>Telefone:</b></center></td><td width='185'><center>$telefone</center></td>
              </tr>
                <td class='mostra'  width='125'><center><b>Cidade: </b></center></td><td width='185'><center>$cidade</center></td>
              <tr>
                <td class='mostra'  width='125'><center><b>Local: </b></center></td><td width='185'><center>$local</center></td>
          
        </tr>
        </table>
        <tr>
        <table align='right'>
          <td align='right' class='mostra'>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
        </table>
</body>
</html>
";

  // emails para quem será enviado o formulário
  $emailenviar = "leo.tywin@gmail.com";
  $destino = $emailenviar;

  if ($cidade == 'Campinas'){
    $assuntoteste = "[CPS] [$categorias] - $titulo";
  } else {
    $assuntoteste = "[SRO] [$categorias] - $titulo";
  }

  $assunto = $assuntoteste;

$headers = 'From: leo.tywin@gmail.com' . "\r\n" . 
           'MIME-Version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset=utf-8';
            

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);

  var_dump($enviaremail);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=index.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }

?>