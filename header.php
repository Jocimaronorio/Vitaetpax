<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vitaetpax
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/plkit.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fonts.css" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>assets/css/style.css" />-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/uikit.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/components/slideshow.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/components/slideshow-fx.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/core/scrollspy.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>

<?php wp_head(); ?>
</head>

<body>

	<nav class="desktop container">
		<ul class="left">
			<li><a href="" title="">Quem Somos</a></li>
			<li><a href="" title="">História</a></li>
			<li><a href="" title="">Pedagogia</a></li>
		</ul>
		<img class="logo" src="<?=bloginfo('stylesheet_directory')?>/assets/img/logoHome.png" alt="Logo" />
		<ul class="right">
			<li><a href="" title="">Informativos</a></li>
			<li><a href="" title="">Galerias</a></li>
			<li><a href="" title="">Fale Conosco</a></li>
		</ul>
		<ul class="extramenu">
			<li><a href="" title=""><img src="<?=bloginfo('stylesheet_directory')?>/assets/img/hat.png" alt=""> Central do Aluno</a></li>
			<li><a href="" title=""><img src="<?=bloginfo('stylesheet_directory')?>/assets/img/guy.png" alt=""> Sala dos Professores</a></li>
		</ul>
	</nav>
	