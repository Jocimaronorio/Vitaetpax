<?php
/**
*
*Template Name: Home
*Template texto: Pagina inicial, usar como index
*
* @package vitaetpax
*/

get_header(); ?>

<?php
    $banner01 = rwmb_meta( 'cit-header-img01', 'type=image' );
    $banner02 = rwmb_meta( 'cit-header-img02', 'type=image' );
    $banner03 = rwmb_meta( 'cit-header-img03', 'type=image' );
    $banner04 = rwmb_meta( 'cit-header-img04', 'type=image' );
    $banner05 = rwmb_meta( 'cit-header-img05', 'type=image' );
    $banner06 = rwmb_meta( 'cit-header-img06', 'type=image' );
    $link01 = rwmb_meta( 'cit-header-link01' );
    $link02 = rwmb_meta( 'cit-header-link02' );
    $link03 = rwmb_meta( 'cit-header-link03' );
    $link04 = rwmb_meta( 'cit-header-link04' );
    $link05 = rwmb_meta( 'cit-header-link05' );
    $link06 = rwmb_meta( 'cit-header-link06' );

    $service01 = rwmb_meta( 'cit-servico-img01', 'type=image' );
    $service02 = rwmb_meta( 'cit-servico-img02', 'type=image' );
    $service03 = rwmb_meta( 'cit-servico-img03', 'type=image' );
    $service04 = rwmb_meta( 'cit-servico-img04', 'type=image' );
    $service05 = rwmb_meta( 'cit-servico-img05', 'type=image' );
    $service06 = rwmb_meta( 'cit-servico-img06', 'type=image' );

    $service_title01 = rwmb_meta( 'cit-servico-titulo01' );
    $service_title02 = rwmb_meta( 'cit-servico-titulo02' );
    $service_title03 = rwmb_meta( 'cit-servico-titulo03' );
    $service_title04 = rwmb_meta( 'cit-servico-titulo04' );
    $service_title05 = rwmb_meta( 'cit-servico-titulo05' );
    $service_title06 = rwmb_meta( 'cit-servico-titulo06' );

    $service_link01 = rwmb_meta( 'cit-servico-link01' );
    $service_link02 = rwmb_meta( 'cit-servico-link02' );
    $service_link03 = rwmb_meta( 'cit-servico-link03' );
    $service_link04 = rwmb_meta( 'cit-servico-link04' );
    $service_link05 = rwmb_meta( 'cit-servico-link05' );
    $service_link06 = rwmb_meta( 'cit-servico-link06' );
    
    $service_description01 = rwmb_meta( 'cit-servico-texto01' );
    $service_description02 = rwmb_meta( 'cit-servico-texto02' );
    $service_description03 = rwmb_meta( 'cit-servico-texto03' );
    $service_description04 = rwmb_meta( 'cit-servico-texto04' );
    $service_description05 = rwmb_meta( 'cit-servico-texto05' );
    $service_description06 = rwmb_meta( 'cit-servico-texto06' );

    $who_we_are = rwmb_meta( 'cit-quem_somos' );

    $partners = rwmb_meta( 'cit-partners-img', 'type=image' );
  ?>
<div class="uk-slidenav-position normal-cover" data-uk-slideshow="{animation: 'scale',autoplay:true}">
    <ul class="uk-slideshow">
    	<?php if( ($banner01)) { 
        echo "<li>";
       		foreach ( $banner01 as $image ) {
          if ( ($link01)) {
            echo "<a href='{$link01}'><img src='{$image['full_url']}'></a>";
          } else {
            echo "<img src='{$image['full_url']}'>";
          }
        echo "</li>";
      	}
      } ?>

      <?php if( ($banner02)) { 
        echo "<li>";
       		foreach ( $banner02 as $image ) {
          if ( ($link02)) {
            echo "<a href='{$link02}'><img src='{$image['full_url']}'></a>";
          } else {
            echo "<img src='{$image['full_url']}'>";
          }
        echo "</li>";
      	}
      } ?>

      <?php if( ($banner03)) { 
        echo "<li>";
       		foreach ( $banner03 as $image ) {
          if ( ($link03)) {
            echo "<a href='{$link03}'><img src='{$image['full_url']}'></a>";
          } else {
            echo "<img src='{$image['full_url']}'>";
          }
        echo "</li>";
      	}
      } ?>

      <?php if( ($banner04)) { 
        echo "<li>";
       		foreach ( $banner04 as $image ) {
          if ( ($link04)) {
            echo "<a href='{$link04}'><img src='{$image['full_url']}'></a>";
          } else {
            echo "<img src='{$image['full_url']}'>";
          }
        echo "</li>";
      	}
      } ?>

      <?php if( ($banner05)) { 
        echo "<li>";
       		foreach ( $banner05 as $image ) {
          if ( ($link05)) {
            echo "<a href='{$link05}'><img src='{$image['full_url']}'></a>";
          } else {
            echo "<img src='{$image['full_url']}'>";
          }
        echo "</li>";
      	}
      } ?>

      <?php if( ($banner06)) { 
        echo "<li>";
       		foreach ( $banner06 as $image ) {
          if ( ($link06)) {
            echo "<a href='{$link06}'><img src='{$image['full_url']}'></a>";
          } else {
            echo "<img src='{$image['full_url']}'>";
          }
        echo "</li>";
      	}
      } ?>
    </ul>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom-center uk-text-center">
        <?php if ( ($banner01)) {?>
        	<li data-uk-slideshow-item="0">
        		<a href=""></a>
        	</li>
        <?php } ?>
        <?php if ( ($banner02)) {?>
        	<li data-uk-slideshow-item="1">
        		<a href=""></a>
        	</li>
        <?php } ?>
        <?php if ( ($banner03)) {?>
        	<li data-uk-slideshow-item="2">
        		<a href=""></a>
        	</li>
        <?php } ?>
        <?php if ( ($banner04)) {?>
        	<li data-uk-slideshow-item="3">
        		<a href=""></a>
        	</li>
        <?php } ?>
        <?php if ( ($banner05)) {?>
        	<li data-uk-slideshow-item="4">
        		<a href=""></a>
        	</li>
        <?php } ?>
        <?php if ( ($banner06)) {?>
        	<li data-uk-slideshow-item="5">
        		<a href=""></a>
        	</li>
        <?php } ?>
        
    </ul>
</div>
<div class="content clearfix">
  <?php while ( have_posts() ) : the_post(); ?>

    <?php
      /* Include the Post-Format-specific template for the content.
       * If you want to override this in a child theme, then include a file
       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
       */
      the_content();
    ?>

  <?php endwhile; ?>
</div>

<div class="posts_home clearfix">
  <h1>Informativos</h1>  
  <div class="container">
    <?php
      $args = array (
        'post_type'              => 'post',
        'posts_per_page'         => '3',
        'order'                  => 'ASC',
        'orderby'                => 'date',

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

<div class="gallery_home clearfix">
  <h1>Galerias</h1>
  <div class="container">
    <?php
    // WP_Query arguments
      $args = array (
        'post_type'              => 'galeria',
        'posts_per_page'         => '8',
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
          <?php echo "<div class='col-xs-6 col-md-3 pic'>";
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

<div class="videos_home clearfix">
  <h1>Videos</h1>
  <div class="container">
    <?php
    // WP_Query arguments
      $args = array (
        'post_type'              => 'videos',
        'posts_per_page'         => '3',
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
          <?php echo "<div class='col-xs-6 col-md-4 pic'>";
            if ( has_post_thumbnail() ) :
              echo the_post_thumbnail();
            endif;
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

<div class="place clearfix">
  <h1>Como chegar</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.51410242991!2d-47.866983500000025!3d-21.1717268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bdbe804632d9%3A0xdda76850fd57dffc!2sAv.+Abade+Constantino%2C+174+-+Jardim+Recreio%2C+Ribeir%C3%A3o+Preto+-+SP%2C+14040-290!5e0!3m2!1spt-BR!2sbr!4v1432565987099" width="100%" height="600" frameborder="0" style="border:0"></iframe>
</div>