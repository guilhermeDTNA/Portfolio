<?php
include_once 'menu.php';

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        
       <!-- Bootstrap  -->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="jquery.min.js" ></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
         <!--  Formulário Google -->
        <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
        
        <!--  Verificando o recaptcha -->
        <script>
    window.onload = function() {
    var recaptcha = document.forms["formulario"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    // fazer algo, no caso to dando um alert
    alert("Por favor, marque a caixa 'Não sou um robô'.");
      }
   }
   </script>
        

        <!-- Custom fonts for this template -->
        <link href="htttps://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/resume.min.css" rel="stylesheet">

        <link href="css/extras.css" rel="stylesheet" type="text/css">
        
        
        <script language="JavaScript">
            document.getElementById('botao').disabled = true;
        </script>
        
        <title>Contato</title>
        
        <!--  Código do Google Analytcs -->
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136244150-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-136244150-1');
        </script>

        <script src="scripts_extra.js"></script>
        <link rel="stylesheet" type="text/css" href="css_extra.css">

        <!--última Animação -->
        <link href="https://fonts.googleapis.com/css?family=Teko:700&display=swap" rel="stylesheet">
        
    </head>

    <body >

        <!--Conteúdo da página -->

        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
        <div class="w-100 pagina-contatos">
            <div class="componentes-mensagem">
                <h2 class="titulo-contato mb-4 titulos" style="font-size: 25px;">Envie uma mensagem</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">


                        <form action="cadastra_mensagem.php" method="POST" enctype="multipart/form-data" name="formulario">

                            <table class="acessibilidade tabela-contato" bgcolor="darksalmon" align=center border=2px height = 100 width= 200 cellspacing=5 cellpadding= 5>

                                <tr>
                                    <td>

                                        <font color="black"> Nome: </font><font color="#8B0000" size=4>*</font> <input type="text" placeholder="Nome" name="nome_autor" required>
                                    </td>
                                    <td>
                                        <font color="black"> E-mail: </font><font color="#8B0000" size=4>*</font> <input type="email" placeholder="E-mail" name="email_autor" id="email_autor" required>
                                    </td>
                                    <td>
                                        <font color="black"> Telefone: </font> <input type="number" placeholder="Telefone" name="telefone_autor">
                                    </td>
                                </tr>

                                <tfoot>
                                    <tr>

                                        <td colspan="3">
                                            <span id="cont"><font color="green">500</span> Restantes </font><font color="#8B0000" size=4>*</font><br>
                                            <p align="center"> <textarea rows="3" cols="60" placeholder="Mensagem" name="conteudo" onkeyup="limite_textarea(this.value)" id="texto" required></textarea></p>
                                            
                                            <input onchange="ValidaArquivo(this)" name="arquivo" type="file" id="arquivo">
                                        </td>
                                    </tfoot>       


                                </tr>

                            </table>
                            <br>
                            
                            <?php
                            require_once "recaptchalib.php";
                            ?>
                            
                            <div data-callback="" class="g-recaptcha acessibilidade" data-sitekey="6LfFaZUUAAAAACyi3cKv1Eo50m_cdc0PeXCy9qol"></div>
                            <br>
               
                            
                            

                            <p align="center"><input class="botao-submit" id="botao-submit" class="acessibilidade" type="submit" name="BTEnvia" value="Enviar Mensagem"></p>
                        </form>

                    </div>
                </div>
            </div>
            <div class="redes-sociais social-icons acessibilidade">

                <div class="titulo-redes-sociais">


                    <h3 class="visitar-perfis"><span class='one'>V</span><span class='two'>i</span><span class='three'>s</span><span class='four'>i</span><span class='five'>t</span><span class='six'>e</span> <span class='seven'>m</span><span class='eight'>e</span><span class='nine'>u</span> <span class='ten'>p</span><span class='eleven'>e</span><span class='twelve'>r</span><span class='thirteen'>f</span><span class='fourteen'>i</span><span class='fifeteen'>l</span> <span class='sixteen'>n</span><span class='seventeen'>a</span><span class='eighteen'>s</span> <span class='nineteen'>r</span><span class='twenty'>e</span><span class='twenty-one'>d</span><span class='twenty-two'>e</span><span class='twenty-three'>s</span> <span class='twenty-four'>s</span><span class='twenty-five'>o</span><span class='twenty-six'>c</span><span class='twenty-eight'>i</span><span class='twenty-nine'>a</span><span class='thirty'>i</span><span class='thirty-one'>s</span>:</h3>
                    <br>
                </div>

                <div class="icones-redes-sociais">
                    <a class="sombra-redes-sociais" href="https://www.linkedin.com/in/guilherme-rocha-leite/" target="_blank">
                        <i class="icone-rede-social fab fa-linkedin" title="linkedIn"></i>
                    </a>
                    <br>
                    <a class="sombra-redes-sociais" href="https://github.com/guilhermeDTNA/" target="_blank">
                        <i class="icone-rede-social fab fa-github" title="GitHub"></i>
                    </a>
                    <br>
                    <a class="" href="https://www.youtube.com/channel/UC28bAjWwKIosH8iZDhT1YEw" target="_blank">
                        <i class="icone-rede-social fab fa-youtube" title="YouTube"></i>
                    </a>
                    <br>
                    <a class="" href="https://www.facebook.com/guilherme.rochaleite.9/" target="_blank">
                        <i class="icone-rede-social fab fa-facebook-f" title="Facebook"></i>
                    </a>
                    <br>
                    <a class="" href="http://lattes.cnpq.br/2493688556132767" target="_blank">
                        <i class="fab icone-rede-social" title="Lattes"><img class="lattes" src="img/lattes-1.jpg" width="25px" heigh="30px" ></i>
                    </a>
                </div>
            </div>

        </section>

        

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/resume.min.js"></script>
    </body>        
</html>