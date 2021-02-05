<html>
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5SH3FG');</script>
<!-- End Google Tag Manager -->

<!-- Script para o LinkedIn -->
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

<!--Abrir ou fechar o menu-->
<script>
	var aberto = false;

	function addClass() {
		var element = document.getElementById("navbarSupportedContent");
		var botao1 = document.getElementsByClassName("navbar-collapse");
		
		//Se o menu estiver aberto, o fecha excluindo o display e removendo o show
		if(aberto){
			for (var i=0; i<botao1.length; i++) {
				botao1[0].setAttribute('style', "display:none");
			}

			element.classList.remove("show");
			aberto = false;

		}
		//Se o menu estiver fechado, remove o style e adiciona o show
		else{
			element.classList.add("show");

			for (var i=0; i<botao1.length; i++) {
				botao1[i].removeAttribute("style");
			}

			aberto = true;
		}

	}

</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="shortcut icon" href="img/favorite.jpg" />

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/resume.min.css" rel="stylesheet">

<link href="css/extras.css" rel="stylesheet" type="text/css">

<link href="css_extra.css" rel="stylesheet" type="text/css">

<script src="scripts_extra.js"></script>


<!--  Código do Google Analytcs -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136244150-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-136244150-1');
</script>

<style>
            .botao-altocontraste {
                width: 210px;
                height: 60px;
            }

        </style>

</head>
<body id="page-top">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5SH3FG"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<!-- Menu -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
			<a class="navbar-brand js-scroll-trigger" href="index.php" alt="Foto de perfil">

				<span class=" d-block d-lg-none">Guilherme Rocha Leite</span>

				<span class="d-none d-lg-block">
					<img title="Este sou eu" class="img-fluid img-profile rounded-circle mx-auto mb-2" src="https://guilhermerocha.tk/img/profile3.jpg" alt=""> 
				</span>
			</a>

			<!--Botão de abrir os itens-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" onclick="addClass();"></span>
			</button>


			<!--Div com os itens-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/index.php#sobre">Sobre</a>
					</li>

					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/index.php#experiencia">Experiência</a>
					</li>

					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/index.php#educacao">Escolaridade</a>
					</li>

					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/index.php#certificados">Certificações</a>
					</li>

					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/index.php#habilidades">Habilidades</a>
					</li>

					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/index.php#projetos">Projetos</a>
					</li>
					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/index.php#eventos">Eventos</a>
					</li>
					<li class="nav-item">
						<a class=" nav-link js-scroll-trigger" href="https://guilhermerocha.tk/contato.php">Contato</a>
					</li>
					<br>
					<li class="nav-item">

						<button class="botao-altocontraste btn btn-dark">

							<a class="nav-link js-scroll-trigger" href="" id="altocontraste" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()"> <img src="https://guilhermerocha.tk/img/alto_contraste.png" width="28px">&nbsp<font size="2px">Alto Contraste</font></a>
						</button>

					</li>
					<li class="nav-item">
						<button onClick="fonte('d');">A-</button> <!-- Botão - -->
						<b><font color="#424242" size="2px" >ALTERAR TAMANHO</font></b>
						<button onClick="fonte('a');">A+</button> <!-- Botão + -->
					</li>
				</ul>
			</div>
		</nav>




		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for this template -->
		<script src="js/resume.min.js"></script>
	</body>
	</html>
