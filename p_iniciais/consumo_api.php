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

        <title>Portfólio - Guilherme Rocha Leite</title>

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
                <h2 class="mb-5 acessibilidade">Criação e consumo de API</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content acessibilidade">
                        <!--  Descrever sobre o sistema -->
                        
                        <p>
                                Este projeto foi desenvolvido em 2020 para um trabalho prático da disciplina de Sistemas Distribuídos, no curso de Sistemas de Informação da UFVJM. A API e uma interface para seu consumo foram construídos em ambiente local, tendo apoio dos alunos Alex Lopes, Luíz Araújo e Gabriel Duarte.
                                
                            </p>
                            <p>
                                Para o desenvolvimento da API, foi utilizado o framework Django, que utiliza linguagem Python, e para a construção da interface, o framework ReactJS, que utiliza, por sua vez, JavaScript.
                            </p>
                            
                            <p>
                               A API usa o modelo IEEE Lom para organizar os Objetos de Aprendizagem (OAs). Os metadados considerados foram: Catálogo, Entrada, Título, Idioma, Descrição, Palavras-chave, Cobertura, Estrutura, Nível de agregação, Formato, Data e Tamanho. 
                            </p>
                               
                            <p>É possível consultar os objetos via URL ou pela interface. Após a consulta, a API retorna os objetos encontrados em formato JSON em nova aba do navegador. O projeto está disponível no meu <a href="https://github.com/GuilhermeDTNA/TPSD" target="_blank">perfil do GitHub</a>. Para executar, todas as instruções estão no Readme do repositório. 
                            </p>
                            
                            
                            <p>
                                O vídeo a seguir é uma exibição do projeto em funcionamento. É possível perceber que as portas usadas pela API e interface são, respectivamente, 8000 e 8001.
                            </p>

                            <br>
                            <br>
                        
                        <p align="center">
                        <video width="450" height="320" controls>
                            <source src="../videos/Consumo-API.mp4" type="video/mp4" />
                        </video>
                        </p>
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