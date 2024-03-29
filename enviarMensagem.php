<?php
    function enviarMensagem($dados){ 
$nome_usuario = $dados['nome'];
$email_usuario = $dados['email'];
$mensagem_usuario = $dados['mensagem'];

$destino = "tchingunji@gmail.com";
$remetente = "josehugoinacio92@gmail.com";
$assunto = "Mensagem do site";

$mensagem = "O usuário " . $nome_usuario . "enviou uma mensagem" . "</BR>";
$mensagem .= "email do usuário: " . $email_usuario . "</BR>";
$mensagem .= $mensagem_usuario;

        return mail($destino, $assunto, $mensagem, $remetente);
    }
?>
