<!DOCTYPE html>
<html>
    <head>
        <title>Haresoft</title>
        
         <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta charset="utf-8">

        <!-- adicionar CSS Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/estilo.css" rel="stylesheet" media="screen">
                <link href="../css/estilo-rodape.css" rel="stylesheet" media="screen">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
    </head>
    <body>
        <!-- Cabeçalho -->
        
        <div class="container">
            <div class="row">
                <header>
                    <nav class="navbar" id="navbar01" role="navigation">


                        <div class="container">
                            <p> 
                                <img  class="icon" src="../imgs/logotipo/icone.png" align="left">
                            </p>
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarcolapse01">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="http://haresoft.com.br" class="btn navbar-brand">haresoft</a>
                            </div>
                            <div class="collapse navbar-collapse" id="navbarcolapse01" aria-expanded="true">
                                <p class="navbar-right"><a href="#"  class="btn navbar-btn">Fale conosco</a></p>

                                <p class="navbar-right"><a href="#"  class="btn navbar-btn">Nosso time</a></p>
                                <p class="navbar-right"><a href="#" class="btn navbar-btn">O que fazemos</a></p>
                                <p class="navbar-right"><a href="#"  class="btn navbar-btn">Sobre a Haresoft</a></p>
                            </div>


                        </div>
                    </nav>
                </header>
            </div>
        </div>
        <!-- fim do cabeçalho -->

        <div class="container-fluid">
            <div class="row" id="apelacao" >
                <div class="col-xs-12 col-md-6  form-contato1" >
                    <div class="col-xs-12 form-contato">
                            <div class="transformed"><h1 align="center">Fale conosco</h1></div>

                            <form class="contactform" name="contactform" method="post" action="./sendmail.php">
                                    <div class="col-md-12" style="padding:0px">
                                        <div class="form-group col-md-6">
                                            <input name="nome" type="text" class="form-control input-lg input-personalizado" placeholder="Seu nome" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input name="email" type="email" class="form-control input-lg teste input-personalizado" placeholder="Seu email" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input name="assunto" type="text" class="form-control input-lg input-personalizado" placeholder="Assunto" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input name="telefone" type="text" class="form-control input-lg input-personalizado" placeholder="telefone" required>
                                        </div>

                                    </div>
                                    <div class="col-md-12" style="padding:0px">
                                         <div class="col-xs-12 contato" style="padding:0px">
                                            <textarea name="mensagem" class="form-control input-personalizado" placeholder="Sua mensagem"></textarea>
                                        </div>
                                        <div class="col-xs-12  text-center"><input type="submit" class="btn btn-primary btn-lg" value="Enviar Mensagem" />

                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                <!-- mapa -->
                <div class="col-xs-12 col-md-6" style="background:red; margin:0px;padding:0px">
                    <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.2824237679333!2d-43.95151278452855!3d-19.870292886637156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6903c321313a5%3A0xda1845ddb2d13745!2sUniversidade+Jos%C3%A9+do+Ros%C3%A1rio+Vellano+-+Unifenas+-+C%C3%A2mpus+BH%2C+Unidade+Jaragu%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1487969034219" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
            
        </div>
        <!-- Conteudo -->
        <!-- fim do conteudo -->
        <!-- rodape -->
        <footer style="height:200px">
              <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center icones">
                        <h1 style="margin-bottom:5px">Haresoft</h1>
                        <img src="../imgs/facebook.png" width="50px" >
                        <img src="../imgs/facebook.png" width="50px" >
                        <img src="../imgs/facebook.png" width="50px" >
                        <p>2017 haresofot - Sua ideia e nossa tecnologia se completam.</p>

                    </div>
                    
                </div>
              </div>
          </footer>
        <!-- fim do rodape -->
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>