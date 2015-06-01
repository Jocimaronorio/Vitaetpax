<?php
/**
*
*Template Name: Informativos
*Template texto: Pagina inicial, usar como index
*
* @package vitaetpax
*/

get_header(); ?>


<div class="posts_home clearfix">
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
  <div class="container">
    <?php
      $args = array (
        'post_type'              => 'post',
        'posts_per_page'         => '9',
        'order'                  => 'ASC',
        'orderby'                => 'date',
        'pagination'             => true,
      );

      // The Query
      $inform = new WP_Query( $args );

      // The Loop
      if ( $inform->have_posts() ) {
        while ( $inform->have_posts() ) {
          $inform->the_post();
          echo "<div class='col-xs-12 col-md-4 a_post'>";
            ?><a href="<?php the_permalink(); ?>"><?php
              if ( has_post_thumbnail() ) :
                echo the_post_thumbnail();
              endif;
            ?></a><?php
            echo "<div class='home_content'> ";
              echo the_title('<h2>', '</h2>');
              echo the_excerpt('<p>', '</p>');
              ?><p class="link"><a href="<?php the_permalink(); ?>">Saiba Mais</a></p><?php
              echo "</div>";
          echo "</div>";
        }
      } else {
        echo "<h1 class='error'>Não tem nenhum informativo a ser exibido</h1>";
      }

      // Restore original Post Data
      wp_reset_postdata();
    ?>
  </div>
</div>


<?php get_footer(); ?>