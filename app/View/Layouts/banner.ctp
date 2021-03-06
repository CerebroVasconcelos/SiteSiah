<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 lt-ie9 lt-ie8" lang="pt-BR"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 lt-ie9" lang="pt-BR"><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" lang="pt-BR">
<!--<![endif]-->
<head>
	<meta charset="<?php echo($this-> response-> charset()); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
	            <?php echo $this->fetch('title'); ?>
	            
	</title>

	<link href="<?php echo($this-> request-> base); ?>/favicon.ico" rel="shortcut icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	-->

    <!-- metas padrão html -->
	<meta name="keywords" content="<?php $this-> Siah-> printHtmlEscaped($meta['keywords']); ?>">
	<meta name="description" content="<?php $this-> Siah-> printHtmlEscaped($meta['description']); ?>">
	<meta name="abstract" content="<?php $this-> Siah-> printHtmlEscaped($meta['abstract']); ?>">
	<meta name="robots" content="<?php echo($meta['robots']); ?>">
	<meta name="author" content="SIAH">

	<!-- Snippet (Google+) -->
	<meta itemprop="name" content="<?php echo ($sisCliente['nome']); ?>">
	<meta itemprop="description" content="<?php echo $this-> Siah-> printHtmlEscaped($meta['description']); ?>">
	<meta itemprop="image" content="<?php echo ($meta['imgSocial']); ?>">

	<!-- OG Facebook -->
	<meta property="og:title" content="<?php $this-> Siah-> printHtmlEscaped($title_for_layout); ?>">
	<meta property="og:description" content="<?php $this-> Siah-> printHtmlEscaped($meta['description']); ?>">
	<meta property="og:image" content="<?php echo($meta['imgSocial']); ?>">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo ($sisCliente['nome']); ?>">
	<meta property="og:url" content="<?php echo($meta['url']); ?>">
	<meta property="og:locale" content="pt_BR">

	<!-- outros -->
	<link rel="canonical" href="<?php echo($meta['url']); ?>">
	<link rel="image_src" href="<?php echo($meta['imgSocial']); ?>">

	<!-- CSS do wp -->
	<link href="<?php echo($this-> request-> base); ?>/css/style.css" rel="stylesheet">
   

	<!-- Owl Carousel Assets -->
    <link href="<?php echo($this-> request-> base); ?>/css/owl-carousel/owl.carousel.css" rel="stylesheet">

    <!-- regra das setas do banner -->
    <link href="<?php echo($this-> request-> base); ?>/css/owl-carousel/owl.theme.css" rel="stylesheet">

    <style type="text/css">
    	/* Vasconcelos
		lista superior
		*/
		body > header
		{


		background: -moz-linear-gradient(top, rgba(15,51,86,1) 0%, rgba(135,153,171,0) 2%, rgba(255,255,255,0) 4%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(15,51,86,1)), color-stop(2%,rgba(135,153,171,0)), color-stop(4%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top, rgba(15,51,86,1) 0%,rgba(135,153,171,0) 2%,rgba(255,255,255,0) 4%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top, rgba(15,51,86,1) 0%,rgba(135,153,171,0) 2%,rgba(255,255,255,0) 4%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top, rgba(15,51,86,1) 0%,rgba(135,153,171,0) 2%,rgba(255,255,255,0) 4%); /* IE10+ */
		background: linear-gradient(to bottom, rgba(15,51,86,1) 0%,rgba(135,153,171,0) 2%,rgba(255,255,255,0) 4%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0f3356', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */


		}
    </style>

    <script src="<?php echo($this-> request-> base); ?>/js/jquery-1.9.1.min.js"></script> 
    <script src="<?php echo($this-> request-> base); ?>/js/owl-carousel/owl.carousel.js"></script>
    
    <!-- 
    APP/View/Layouts/banner.ctp
    -->
</head>
<body>
	<!--
	<div id="subheader" class="">
		<div class="container">contato@siahonline.com.br | (92) 3088-6287</div>
	</div>
	-->
	<header id="header" role="banner">
		<div class="container">
			<div id="logo" class="span3 alpha">
				<a href="<?php echo($this-> request-> base); ?>/"> 
					<img src="<?php echo($this-> request-> base); ?>/img/logo_siah_220x80.png" title="SIAH Soluções Inteligentes" alt="logo SIAH soluções inteligentes"/>
				</a>
			</div>
			<div id="pub-header" class="span9">
				<nav id="main-navigation" class="navbar" role="navigation">
					<a class="assistive-text" href="#content" title="Pular para o conteúdo">Pular para o conteúdo</a>
					<div class="navbar-inner">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div class="nav-collapse collapse">
							<nav>				        	
					       	<?php
								echo $this->element ( 'menuSiah', array (
										'data' => $dataMenu 
								) );
							?>

			            </nav>
						</div>
					</div>
				</nav>
				<!-- #main-menu -->
			</div>
		</div>




	</header><!-- #header -->

	<section id="main">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	
	</section>
	<!-- #main -->

	<footer id="footer" role="contentinfo">

	   	<?php
			echo $this->element ( 'footer' );
		?>

		<?php
		// echo $this->element('sql_dump');
		?>
	</footer>

		
		<script type='text/javascript' src='<?php echo($this-> request-> base); ?>/js/jquery.fitvids.min.js'></script>
		<script type='text/javascript' src='<?php echo($this-> request-> base); ?>/js/main.js'></script>
		<script type='text/javascript' src='<?php echo($this-> request-> base); ?>/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='<?php echo($this-> request-> base); ?>/js/jquery.form.min.js'></script>
		<script type='text/javascript' src='<?php echo($this-> request-> base); ?>/js/scripts.js'></script>
</body>
</html>
