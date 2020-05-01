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
        
    </head>

    <body >

        <!--Conteúdo da página -->

        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <h2 class="mb-5">Enviar uma mensagem</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">


                        <form action="cadastra_mensagem.php" method="POST" name="formulario">

                            <table class="acessibilidade" bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>

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
                            
                            
                            <br>
                            
                            
        
                            <p align="center"><input class="acessibilidade" type="submit" name="BTEnvia" value="Registrar Mensagem"></p>
                    </form>
                    
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