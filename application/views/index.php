<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo img_url("icon.png")?>">

<title>dote.Pet</title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo vendor_url("bootstrap/css/bootstrap.min.css")?>"
	rel="stylesheet">

<!-- Custom Fonts -->
<link
	href="<?php echo vendor_url("font-awesome/css/font-awesome.min.css")?>"
	rel="stylesheet" type="text/css">
<link href='<?php echo js_url("google-fonts-1.js")?>' rel='stylesheet'
	type='text/css'>
<link href='<?php echo js_url("google-fonts-2.js")?>' rel='stylesheet'
	type='text/css'>

<!-- Plugin CSS -->
<link
	href="<?php echo vendor_url("magnific-popup/magnific-popup.css")?>"
	rel="stylesheet">

<!-- Theme CSS -->
<link href="<?php echo css_url("creative.min.css")?>" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i
						class="fa fa-bars"></i>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="page-scroll" href="#home">Home</a></li>
					<li><a class="page-scroll" href="#about">Sobre</a></li>
					<li><a class="page-scroll" href="#services">Serviços</a></li>
					<li><a class="page-scroll" href="#contact">Contato</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<header id="home">
		<div class="header-content">
			<div class="header-content-inner">
				<img alt="" src="<?php echo img_url("logo.png")?>"
					style="width: 50%;">
			</div>
		</div>
	</header>

	<section class="" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Ame | Cuide | (a) Dote</h2>
					<hr class="light">
					<p>Somos a plataforma favorita do seu melhor amigo: vamos encontrar um lugar 
					legal, com um cuidador responsável e cheio de amor para ele enquanto você faz 
					sua viagem ou sai para jantar. Assim, ele se diverte e você fica tranquilo.</p>
				</div>
			</div>
		</div>
	</section>

	<!--
	<form action="<?php echo base_url("home/cadastrar")?>" method="POST">
	  -->
	<form action="http://eepurl.com/cljOLX" target="_blank">
	<section id="services" class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Junte-se a nós</h2>
					<hr class="primary">
				</div>
			</div>
		</div>
		<div class="container"  align="center">
			<div class="row options">
				<ul class="options">
	          <li>
	            <article id="idA" onclick="window.open('http://eepurl.com/cljOLX')">
					<i class="fa fa-4x fa-heart text-primary sr-icons"></i>
					<h3>Quero que Cuidem</h3>
	              <input type="radio" value="0" name="choice"  />
	            </article>
          </li>
          <li>
            <article id="idAC" onclick="window.open('http://eepurl.com/cljOLX')">
				<i class="fa fa-4x fa-home text-primary sr-icons"></i>
				<h3>Quero Cuidar</h3>
              <input type="radio" value="1" name="choice"  />
            </article>

          </li>
          <!-- 
          <li class="col-lg-3 col-sm-12 col-md-12">
            <article id="idC" onclick="window.open('http://eepurl.com/cljOLX')">
				<i class="fa fa-4x fa-building text-primary sr-icons"></i>
				<h3>Sou Empresa</h3>
            <input type="radio" value="2" name="choice"  />
            </article>
          </li>
           -->
        </ul>
		</div>
		</div>
		<div align="center">
		<!-- 
            <input class="beautyful-input" type="text" name="name" placeholder="Nome" required=""></br>
            <input class="beautyful-input" type="email" name="email" placeholder="E-mail" required=""></br>
	    	<input class="beautyful-input" type="text" name="cep" placeholder="Cidade" required=""></br>
		 -->
			<input type="submit" value="Quero me cadastrar"/>
		</div>
	</section>
	</form>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Fique com a gente!</h2>
					<hr class="primary">
					<p>Além do app, você pode nos encontrar no Facebook e no Instagram!</p>
				</div>
				<div class="col-lg-6 col-sm-12 col-md-6 text-center center">
					<i class="fa fa-facebook fa-3x sr-contact"></i>
					<p>
						<a href="https://www.facebook.com/dotepet01" target="_blank">facebook.com/dotepet01</a>
					</p>
				</div>
				<div class="col-lg-6 col-sm-12 col-md-6 text-center center">
					<i class="fa fa-instagram fa-3x sr-contact"></i>
					<p>
						<a href="https://www.instagram.com/dotepet/" target="_blank">instagram.com/dotepet</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- jQuery -->
	<script src="<?php echo vendor_url("jquery/jquery.min.js")?>"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo vendor_url("bootstrap/js/bootstrap.min.js")?>"></script>

	<!-- Plugin JavaScript -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script
		src="<?php echo vendor_url("scrollreveal/scrollreveal.min.js")?>"></script>
	<script
		src="<?php echo vendor_url("magnific-popup/jquery.magnific-popup.min.js")?>"></script>

	<!-- Theme JavaScript -->
	<script src="<?php echo js_url("creative.min.js")?>"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86198110-1', 'auto');
  ga('send', 'pageview');

</script>
	
</body>

</html>
