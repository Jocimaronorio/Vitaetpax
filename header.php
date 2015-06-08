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
			<li><a <?php if ( is_page ( 'quem-somos' ) || is_singular( 'quem-somos' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/quem-somos' ) ); ?>">Quem somos</a></li>
			<li><a <?php if ( is_page ( 'historia' ) || is_singular( 'historia' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/historia' ) ); ?>">História</a></li>
			<li><a <?php if ( is_page ( 'pedagogia' ) || is_singular( 'pedagogia' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/pedagogia' ) ); ?>">Pedagogia</a></li>
		</ul>
		<a <?php if ( is_page ( 'home' ) || is_singular( 'home' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?=bloginfo('stylesheet_directory')?>/assets/img/LogoHome.png" alt="Logo" /></a>
		<ul class="right">
			<li><a <?php if ( is_page ( 'informativos' ) || is_singular( 'informativos' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/informativos' ) ); ?>">Informativos</a></li>
			<li><a <?php if ( is_page ( 'galerias' ) || is_singular( 'galerias' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/galerias' ) ); ?>">Galerias</a></li>
			<li><a <?php if ( is_page ( 'fale-conosco' ) || is_singular( 'fale-conosco' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/fale-conosco' ) ); ?>">Fale Conosco</a></li>
		</ul>
		<ul class="extramenu">
			<li><a href="http://www.primasoft.srv.br/sg_web/default.aspx?escola=3301" target="blank" title=""><img src="<?=bloginfo('stylesheet_directory')?>/assets/img/hat.png" alt=""> Central do Aluno</a></li>
			<li><a href="http://www.primasoft.srv.br/sg_web/default.aspx?escola=3301" target="blank" title=""><img src="<?=bloginfo('stylesheet_directory')?>/assets/img/guy.png" alt=""> Sala dos Professores</a></li>
		</ul>
	</nav>
	
	<nav class="mobile container">
		<a <?php if ( is_page ( 'home' ) || is_singular( 'home' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?=bloginfo('stylesheet_directory')?>/assets/img/LogoFooter.png" alt="Logo" /></a>
		<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
	        <ul class="dropdown-menu" role="menu">
	        	<li><a <?php if ( is_page ( 'home' ) || is_singular( 'home' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li><a <?php if ( is_page ( 'quem-somos' ) || is_singular( 'quem-somos' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/quem-somos' ) ); ?>">Quem somos</a></li>
				<li><a <?php if ( is_page ( 'historia' ) || is_singular( 'historia' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/historia' ) ); ?>">História</a></li>
				<li><a <?php if ( is_page ( 'pedagogia' ) || is_singular( 'pedagogia' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/pedagogia' ) ); ?>">Pedagogia</a></li>
				<li><a <?php if ( is_page ( 'informativos' ) || is_singular( 'informativos' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/informativos' ) ); ?>">Informativos</a></li>
				<li><a <?php if ( is_page ( 'galerias' ) || is_singular( 'galerias' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/galerias' ) ); ?>">Galerias</a></li>
				<li><a <?php if ( is_page ( 'fale-conosco' ) || is_singular( 'fale-conosco' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/fale-conosco' ) ); ?>">Fale Conosco</a></li>
				<li><a href="http://www.primasoft.srv.br/sg_web/default.aspx?escola=3301" target="blank" title="">Central do Aluno</a></li>
				<li><a href="http://www.primasoft.srv.br/sg_web/default.aspx?escola=3301" target="blank" title="">Sala dos Professores</a></li>
			</ul>
        </li>
	</nav>