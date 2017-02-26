<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Contato</title>
    </head>

    
    <body>
        <form name="contactform" method="post" action="./sendmail.php"> 
        Nome: <input type="text" name="nome"/> <br/><br/>
        E-mail: <input type="text" name="email"/> <br/><br/>
        Assunto: <input type="text" name="assunto"/> <br/><br/>
		Telefone: <input type="text" name="telefone"/> <br/><br/>
        Mensagem: <textarea name="mensagem"></textarea> <br/><br/>
        <input type="submit" value="Enviar Mensagem" />
        </form>
    </body>
</html>