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