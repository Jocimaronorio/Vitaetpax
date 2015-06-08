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
   <div class="posts_home">
    <?php
    // set the "paged" parameter (use 'page' if the query is on a static front page)
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    // the query
    $blog = new WP_Query( 'cat=1&paged=' . $paged ); ?>
    <div class="row">
    <?php if ( $blog->have_posts() ) : 
    // the loop for blog
    while ( $blog->have_posts() ) : $blog->the_post(); 
      echo "<div class='col-xs-12 a_post'>";
      ?><a href="<?php the_permalink(); ?>"><?php
        if ( has_post_thumbnail() ) :
          echo the_post_thumbnail();
        endif;
      ?></a><?php
      echo "<div class='home_content'> ";
        echo the_title('<h2>', '</h2>');
        ?>
        <img class="clock" src="<?php bloginfo( 'template_url' ); ?>/assets/img/time.png" alt=""><span class="date"><?php the_time("l, F d, Y"); ?> as <?php the_time('G:i'); ?></span>
        <?
        echo the_excerpt('<p>', '</p>');
        ?><p class="link"><a href="<?php the_permalink(); ?>">Saiba Mais</a></p><?php
        echo "</div>";
      echo "</div>";
    endwhile; ?>
    </div>
    <hr>
    <?php

    echo "<div class='row pagination'>";

      // next_posts_link() usage with max_num_pages
      echo "<div class='col-xs-6 ta-left'>";
        previous_posts_link( 'Postagens mais recentes' );
      echo "</div>";
      echo "<div class='col-xs-6 ta-right'>";
        next_posts_link( 'Postagens mais antigas', $blog->max_num_pages );
      echo "</div>";

    echo "</div>";
    ?>

    <?php 
    // clean up after the query and pagination
    wp_reset_postdata(); 
    ?>

    <?php else:  ?>
    <p><?php _e( 'Desculpe, não foi encontrado nenhum post.' ); ?></p>
    <?php endif; ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>