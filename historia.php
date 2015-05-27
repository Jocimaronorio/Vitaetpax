<?php
/**
*
*Template Name: História
*Template texto: Pagina História
*
* @package vitaetpax
*/

get_header(); 

  $image_title = rwmb_meta( 'vita-historia-img', 'type=image' );
	$who_we_are = rwmb_meta( 'vita-historia' );
	$image_back = rwmb_meta( 'vita-historia-back', 'type=image' );
  $image_title2 = rwmb_meta( 'vita-historia-img2', 'type=image' );
	$who_we_are2 = rwmb_meta( 'vita-historia2' );
	$image_back2 = rwmb_meta( 'vita-historia-back2', 'type=image' );  
?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<div class="about clearfix">
	<div class="col-xs-12 col-md-6 first">
		<?php
		foreach ( $image_title as $image ) {
      echo "<img src='{$image['full_url']}'>";
      echo "<p>{$who_we_are}</p>";
    }?>
	</div>
	<div class="col-xs-12 col-md-6 nopadding">
		<?php
		foreach ( $image_back as $image ) {
      echo "<img class='fright nopadding' src='{$image['full_url']}'>";
    }?>
	</div>
</div>

<div class="about_second clearfix">
	<div class="col-xs-12 col-md-6 nopadding">
		<?php
		foreach ( $image_back2 as $image ) {
      echo "<img class='fleft nopadding' src='{$image['full_url']}'>";
    }?>
		
	</div>
	<div class="col-xs-12 col-md-6">
		<?php
		foreach ( $image_title2 as $image ) {
      echo "<img src='{$image['full_url']}'>";
      echo "<p>{$who_we_are2}</p>";
    }?>
	</div>
</div>

<div class="the_contenx1t_div">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
			/* translators: %s: Name of current post */
			the_content(  );
		?>
		<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>