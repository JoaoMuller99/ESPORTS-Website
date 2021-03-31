<?php

$para = "joaomuller@sou.faccat.br";
$assunto = "Site de Autoria";
$name = $_POST['name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];
$mensagem = 'Nome: '.$name;
$mensagem .= '<br>E-mail: '.$email;
$mensagem .= '<br>Mensagem: '.$textarea; 

$header="Content-Type: text/html; charset= utf-8\n";
$header.="From: $email Reply-to: $email\n";

mail($para, $assunto, $mensagem, $header);

if ( mail( $para, $assunto, $mensagem, $header) == false ) {
    echo "Erro ao enviar e-mail ";
}

header("Location: ../sucesso.html");
?>