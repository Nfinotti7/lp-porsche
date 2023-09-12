<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$recaptchaSecret = "6LeXAQ4oAAAAAH39ClRTJBH8m-ZH7OFMfHfSiOlo";

$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$resposta = json_decode($resposta);

if($resposta->success == 1){
    $captchaSuccess = true;
}else{
    exit;
}

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'esportivosdeluxo.com.br';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contatogo@esportivosdeluxo.com.br';                     //SMTP username
    $mail->Password   = 'KuN32$V3wqO';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contatogo@esportivosdeluxo.com.br', 'Atendimento Landing Page');
    $mail->addAddress('recebimento-total@esportivosdeluxo.com.br');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enviado pela Landing Page - ' . $_SERVER['HTTP_REFERER'];

    $mail->CharSet = 'UTF-8';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    $mail->Body= "
        <meta charset='UTF-8'>
        <style type='text/css'>
            body {
                margin: 0px;
                font-family: Verdane;
                font-size: 14px;
                color: #333;
            }

            a {
                color: #8354E9;
                text-decoration: underline;
            }

            a:hover {
                color: initial;
                text-decoration: underline;
            }
        </style>

        <html>
            <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#eee'>
                <tr>
                    <td width='500'>Nome: <b>$nome</b></td>
                </tr>
                <tr>
                    <td width='320'>Telefone: <b>$telefone</b></td>
                </tr>
                <tr>
                    <td width='320'>E-mail: <b>$email</b></td>
                </tr>
                <tr>
                    <td width='320'>Mensagem: $mensagem</td>
                </tr>
                <tr>
                    <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
                </tr>
            </table>
        </html>
        ";
    

    if( $captchaSuccess ){
        $errors = $mail->send();
    }

    if($errors == true){
        echo "sucesso";
    }else{
        echo "erro";
    }
} catch (Exception $e) {
    echo "erro";
}
