<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package vitaetpax
 */
?>

<footer>
	<div class="container">
			<div class="logo col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<a <?php if ( is_page ( 'home' ) || is_singular( 'home' ) ) { ?> class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?=bloginfo('stylesheet_directory')?>/assets/img/LogoFooter.png" alt="Logo" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<p>© 2014, Vita Et Pax. Todos os direitos reservados.</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<div class="fb-page" data-href="https://www.facebook.com/vitaetpax" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/vitaetpax"><a href="https://www.facebook.com/vitaetpax">Colégio Vita et Pax</a></blockquote></div></div>			
			</div>
			<div class="ibs col-xs-12 col-sm-12 col-md-1 col-lg-1">
			</div>
			<div class="ibs col-xs-12 col-sm-12 col-md-1 col-lg-1">
				<a href="http://www.ibsdigital.com/" target="blank" title=""><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/ibs.png"></a>
			</div>
	</div>	
</footer>

<?php wp_footer(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=443239112512151";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
