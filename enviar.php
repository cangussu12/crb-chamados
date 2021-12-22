<?php
    require "conexao2.php";
    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

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


require_once "usuario.class.php";
$u = new Usuario();
$listalogado = $u->logado($_SESSION['idUsuario']);
$email_usuario = $listalogado['email'];

require_once('./PHPMailer-FE_v4.11/_lib/class.phpmailer.php');

//campos que pega os posts
// Compo E-mail
$arquivo = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>

      <table>
      <td class='mostra' width='300'>$descricao</td>
      </table>
      
      <table class='formpronto' width='310' border='0' cellpadding='1' cellspacing='1'>
            <td class='logo'>
                <img src=''/>
            </td>
      </table>
      
            <table class='formpronto' width='310' border='1' cellpadding='1' cellspacing='1'>
               <td class='mostra' width='125'><center><b>Setor: </b></center></td><td width='185'><center>$setor</center></td>
            <tr>
                <td class='mostra'  width='125'><center><b>Categoria: </b></center></td><td width='185'><center>$categorias<center></td>
    <tr>
                <td class='mostra'  width='125'><center><b>Telefone:</b></center></td><td width='185'><center>$telefone</center></td>
              </tr>
                <td class='mostra'  width='125'><center><b>Local: </b></center></td><td width='185'><center>$cidade</center></td>
                </tr>
                <td class='mostra'  width='125'><center><b>Local: </b></center></td><td width='185'><center>$local</center></td>
        </tr>
        </table>
        <tr>
        <table align='left'>
          <td align='left' class='mostra'>Este e-mail foi enviado em <b>$data_envio</b> as <b>$hora_envio</b></td>
        </tr>
        </table>
</body>
</html>
";

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; //Indica a porta de conexão 
$mailer->Host = 'smtp.live.com';//Endereço do Host do SMTP 
$mailer->SMTPAuth = true; //define se haverá ou não autenticação 
$mailer->Username = 'leonardo.cangussu@crbconstrutora.com.br'; //Login de autenticação do SMTP
$mailer->Password = '9v34yhDe'; //Senha de autenticação do SMTP
$mailer->FromName = $email_usuario; //Nome que será exibido
$mailer->From = $email_usuario; //Obrigatório ser 
$mailer->AddAddress('leonardo.cangussu@crbconstrutora.com.br');

//Destinatários
$mailer->Subject = $titulo;
$mailer->isHTML(true);
$mailer->Body = $arquivo;
if(!$mailer->Send())
{
echo "Message was not sent";
echo "Mailer Error: " . $mailer->ErrorInfo; exit; }
print "E-mail enviado!"
?>