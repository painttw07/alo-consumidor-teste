<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "recepcao@clinicentro.com.br";
//$para = "luishenriquepereirajunior@gmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['nome'];
$celular = $_POST['celular'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$assunto = "Contato Site - Clinicentro";
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br><strong>Celular:  </strong>".$celular;
$mensagem .= "<br><strong>Mensagem: </strong>"
.$_POST['mensagem'];

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  Contato Site Clinicentro<recepcao@clinicentro.com.br>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <recepcao@clinicentro.com.br>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <recepcao@clinicentro.com.br>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
header('Location:contato.php?alert=enviado');
?>