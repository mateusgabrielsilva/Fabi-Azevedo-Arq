<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$tel = $_REQUEST["tel"];
$message = $_REQUEST["message"];



$to = "fabi@fabiazevedoarquitetura.com.br";
$subject = "Contato pelo Site";
$corpo = "Nome: " . $name . "\r\n" .
    "Telefone: " . $tel . "\r\n" .
    "E-mail: " . $email . "\r\n" .
    "Mensagem: " . $message;

$header = "From : contato@fabiazevedoarquitetura.com.br" . "\r\n"
    . "Reply-To:" . $email . "\r\n"
    . "X=Mailer:PHP/" . phpversion();

if (mail($to, $subject, $corpo, $header)) {

    echo 'E-mail enviado com sucesso!';

} else {

    echo 'Erro ao enviar e-mail. Tente novamente.';
    
}


