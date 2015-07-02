<?php
/**
*
*Template Name: Galerias
*Template texto: Pagina de Galerias
*
* @package vitaetpax
*/

get_header(); ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<div class="gallery_page clearfix">
  <h1>Fotos</h1>
  <div class="container">
    <?php
    // WP_Query arguments
      $args = array (
        'post_type'              => 'galeria',
        'order'                  => 'ASC',
        'orderby'                => 'date',
      );

      // The Query
      $galeria = new WP_Query( $args );

      // The Loop
      if ( $galeria->have_posts() ) {
        while ( $galeria->have_posts() ) {
          $galeria->the_post();?>
          <a href="<?php the_permalink(); ?>" title="">
          <?php echo "<div class='col-xs-12 col-md-3 pic'>";
            if ( has_post_thumbnail() ) :
              echo the_post_thumbnail();
            endif;
            echo the_title('<p>', '</p>');
          echo "</div>";?>
          </a>
        <?php  
        }
      } else {
        echo "<h1 class='error'>Não tem nenhum informativo a ser exibido</h1>";
      }

      // Restore original Post Data
      wp_reset_postdata();
    ?>
  </div>
</div>

<div class="videos_page clearfix">
  <h1>Videos</h1>
  <div class="container">
    <?php
    // WP_Query arguments
      $args = array (
        'post_type'              => 'videos',
        'order'                  => 'ASC',
        'orderby'                => 'date',
      );

      // The Query
      $galeria = new WP_Query( $args );

      // The Loop
      if ( $galeria->have_posts() ) {
        while ( $galeria->have_posts() ) {
          $galeria->the_post();?>
          <a href="<?php the_permalink(); ?>" title="">
          <?php echo "<div class='col-xs-12 col-md-4 pic'>";
            if ( has_post_thumbnail() ) :
              echo the_post_thumbnail();?>
              <img class="video-link" src="<?=bloginfo('stylesheet_directory')?>/assets/img/video-link.png" />
            <?php  endif;
            echo the_title('<p>', '</p>');
          echo "</div>";?>
          </a>
        <?php  
        }
      } else {
        echo "<h1 class='error'>Não tem nenhum video a ser exibido</h1>";
      }

      // Restore original Post Data
      wp_reset_postdata();
    ?>
  </div>
</div>

<?php get_footer(); ?>