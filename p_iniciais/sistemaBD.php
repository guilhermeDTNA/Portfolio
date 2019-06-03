<?php
include_once '../menu.php';
?>

<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Portfolio - Guilherme Rocha Leite</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/resume.min.css" rel="stylesheet">

        <link href="../css/extras.css" rel="stylesheet" type="text/css">
        
        <link href="../css_extra.css" rel="stylesheet" type="text/css">

    </head>


    <body class="contrast">


        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <h2 class="mb-5 acessibilidade">Sistema de Gerenciamento de Cursos</h2>

                    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="resume-content acessibilidade">
                            <!--  Descrever sobre o sistema -->
                            <p>
                                Este projeto foi desenvolvido em janeiro de 2019 para um trabalho prático da disciplina Banco de Dados II, no curso de Sistemas de Informação da UFVJM. O sistema foi desenvolvido em rede local (localhost) por mim e pelos, na época, alunos da disciplina: Darlan Souza e Luiz Araújo.
                                
                            </p>
                            <p>
                                Os recursos utilizados para o seu desenvolvimento foram as linguagens PHP, JavaScript, CSS, HTML, JQuery e SQL, sendo que mais tarde eu integrei ao sistema recursos do Bootstrap. E para o versionamento de código entre os integrantes, escolhemos utilizar os softwares Git, GitHub e GitKraken.
                            </p>
                            
                            <p>
                                O sistema foi criado para gerenciar cursos dentro de uma instiuição. Ele permite manipular indivíduos dos tipos Aluno, Professor e Diretor, além de elementos importantes como Despesa, Curso e Matrícula.
                            </p>
                            
                            <p>
                                Para realizar o login no sistema, o usuário deve ter o nome de usuário e senha de um diretor cadastrado. Portanto, para entrar, você pode utilizar o usuário: <b>admin</b> e a senha: <b>admin</b>.
                            </p>
                            
                            <p align="center"></p>
                            <br>
                                
                            <p class="acessibilidade" align="center"><a href="../Projetos/SistemaBDII/index.php" target="_blank">Visitar Sistema</a></p>
                        </div>
                    </div>
            </div>
        </section>


        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="../js/resume.min.js"></script>
        
        <script src="../scripts_extra.js"></script>
        
    </body>
</html>