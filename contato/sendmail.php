<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Enviando e-mail...</title>
    </head>

    
    <body>
		<?php
			$para = "contato@haresoft.com.br";
			$nome=$_POST['nome'];
			$assunto=$_POST['assunto'];
			$telefone=$_POST['telefone'];			
			$email=$_POST['email'];
			
			
			$mensagem = "<strong>Nome: </strong> " .$nome;
			$mensagem .= "<br> <strong>Telefone: </strong>" .$telefone;
			$mensagem .= "<br> <strong>Mensagem: </strong>" .$_POST['mensagem'];
			
		
			
			$subject = "$assunto";
			
			
			/* $message = "<strong>Nome: </strong> $nome<br /><br /> <strong>E-mail: </strong>$email<br /><br /><strong>Assunto: </strong> $assunto<br /><br /><strong>Mensagem: </strong> $mensagem<br /><br />"; */
			
			$headers = "Content-type: text/html; charset=UTF8\n";
			$headers .= "From: $email\n";
			$headers .= "X_Sender: $email\n";
			$headers .= "X_Mailer: PHP v".phpversion()."\n";
			$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
			$headers .= "Return-Path: $email\n";
			$headers .= "MIME-Version: 1.0\n";
			
			mail($para, $assunto, $mensagem, $headers);
			echo "Mensagem enviada com sucesso!";
		?>
    </body>
</html>