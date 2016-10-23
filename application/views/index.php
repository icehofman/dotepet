<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

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
					<li><a class="page-scroll" href="#about">Sobre</a></li>
					<li><a class="page-scroll" href="#services">Serviços</a></li>
					<li><a class="page-scroll" href="#contact">Contato</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<header>
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
					<h2 class="section-heading">We've got what you need!</h2>
					<hr class="light">
					<p>Start Bootstrap has everything you need to get your new website
						up and running in no time! All of the templates and themes on
						Start Bootstrap are open source, free to download, and easy to
						use. No strings attached!</p>
					<a href="#services"
						class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
				</div>
			</div>
		</div>
	</section>

	<section id="services" class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Junte-se a nós</h2>
					<hr class="primary">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 text-center">
					<div class="service-box">
						<i class="fa fa-4x fa-heart text-primary sr-icons"></i>
						<h3>Quero que Cuidem</h3>
					</div>
				</div>
				<div class="col-lg-4 text-center">
					<div class="service-box">
						<i class="fa fa-4x fa-home text-primary sr-icons"></i>
						<h3>Quero Cuidar</h3>
					</div>
				</div>
				<div class="col-lg-4 text-center">
					<div class="service-box">
						<i class="fa fa-4x fa-building text-primary sr-icons"></i>
						<h3>Sou Empresa</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo img_url("iguan.jpeg")?>" class="portfolio-box">
                        <img src="<?php echo img_url("iguan.jpeg")?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Répteis
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo img_url("bird.jpeg")?>" class="portfolio-box">
                        <img src="<?php echo img_url("bird.jpeg")?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Pássaros
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo img_url("turtle.jpeg")?>" class="portfolio-box">
                        <img src="<?php echo img_url("turtle.jpeg")?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Turtle
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo img_url("habbit.jpeg")?>" class="portfolio-box">
                        <img src="<?php echo img_url("habbit.jpeg")?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo img_url("cat.jpeg")?>" class="portfolio-box">
                        <img src="<?php echo img_url("cat.jpeg")?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo img_url("pig.jpeg")?>" class="portfolio-box">
                        <img src="<?php echo img_url("pig.jpeg")?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>
 -->

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Let's Get In Touch!</h2>
					<hr class="primary">
					<p>Ready to start your next project with us? That's great! Give us
						a call or send us an email and we will get back to you as soon as
						possible!</p>
				</div>
				<div class="col-lg-12 text-center center">
					<i class="fa fa-facebook fa-3x sr-contact"></i>
					<p>
						<a href="https://www.facebook.com/dotepet01">facebook.com/dotepet01</a>
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

</body>

</html>
