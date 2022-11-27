<?php

if(isset($_POST['email']) && !empty($_POST['nome'])){

$nome=addcslashes($_POST['nome'])
$bairro=addcslashes($_POST['bairro'])
$telefone=addcslashes($_POST['fone'])
$mail=addcslashes($_POST['email'])
$servico =addcslashes($_POST['select'])

$to = "emailpara onde a msg vai@tal.com";
$subject = "Novo Cliente GVJ Maranata Serviços";
$body = "Nome : ".$nome "\r\n".
        "Email: " .$email. "\r\n".
        "Bairro".$bairro."\r\n".
        "Telefone: ".$fone. "\r\n".
        "Serviço: " .$select."\r\n";

$header = "From:email do dominio@gmail.com"."\r\n".
        "Reply-To:".$email. "\r\n".
        "X=Mailer:PHP/".phpversion();



if(mail($to,$subject,$body,$header)){
    echo("Email Enviado com Sucesso!");
}
 else{
    echo("Email não pode ser enviado.");
}

}


?>