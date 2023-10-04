<?php

if(isset($_POST(['email']) && !empty()))

$nome = addcslashes($_POST(['nome']));
$email = addcslashes($_POST(['email']));
$celular = addcslashes($_POST(['celular']));
$mensagem = addcslashes($_POST(['mensagem']));

$to = "nycollassrl@gmail.com";
$assunto = "Contato - teste";
$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Celular: ".$celular. "\n"
        "Mensagem: ".$mensagem;

$header = "From: nycollassrl@gmail.com"."\r\n"
                ."Reply-To:".$email."\r\n"
                ."x=Mailer:PHP/".phpversion();

if (mail($to,$assunto,$body,$header)){
    echo("Email enviado com sucesso");
}
else{
    echo("Email nao pode ser enviado");
}


?>