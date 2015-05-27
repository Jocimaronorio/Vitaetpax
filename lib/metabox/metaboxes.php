<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

$prefix = 'vita-';

global $meta_boxes;

$meta_boxes = array();

/* Home - Header */

$meta_boxes[] = array(
    'title'    => 'Banners Header <style>.rwmb-add-file {display: none}</style>',
	  'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-home-banners',
    'fields' => array(
        array(
            'name' => 'Banner 1',
            'id'   => "{$prefix}header-img01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 2',
            'id'   => "{$prefix}header-img02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 3',
            'id'   => "{$prefix}header-img03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 1',
            'id'   => "{$prefix}header-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 2',
            'id'   => "{$prefix}header-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 3',
            'id'   => "{$prefix}header-link03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 4',
            'id'   => "{$prefix}header-img04",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 5',
            'id'   => "{$prefix}header-img05",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Banner 6',
            'id'   => "{$prefix}header-img06",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 4',
            'id'   => "{$prefix}header-link04",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 5',
            'id'   => "{$prefix}header-link05",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 6',
            'id'   => "{$prefix}header-link06",
            'type' => 'text',
            'columns' => 4,
        ),
    )
);

/* QUEM SOMOS */
$meta_boxes[] = array(
    'title'    => 'Institucional Chamada 1 <style>.rwmb-add-file {display: none}</style>',
    'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'institucional-page.php' ),
    ),
    'id'       => 'pagina-quemsomos',
    'fields' => array(
        array(
            'name' => 'Imagem',
            'id'   => "{$prefix}quem_somos-img",
            'type' => 'image',
            'columns' => 6,
        ),
        array(
            'name' => 'Quem Somos',
            'id'   => "{$prefix}quem_somos",
            'type' => 'textarea',
            'columns' => 6,
        ),
        array(
            'name' => 'Background',
            'id'   => "{$prefix}quem_somos-back",
            'type' => 'image',
            'columns' => 12,
        ),
    )
);
$meta_boxes[] = array(
    'title'    => 'Institucional Chamada 2 <style>.rwmb-add-file {display: none}</style>',
    'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'institucional-page.php' ),
    ),
    'id'       => 'pagina-quemsomos-segunda',
    'fields' => array(
        array(
            'name' => 'Imagem',
            'id'   => "{$prefix}quem_somos-img2",
            'type' => 'image',
            'columns' => 6,
        ),
        array(
            'name' => 'Quem Somos',
            'id'   => "{$prefix}quem_somos2",
            'type' => 'textarea',
            'columns' => 6,
        ),
        array(
            'name' => 'Background',
            'id'   => "{$prefix}quem_somos-back2",
            'type' => 'image',
            'columns' => 12,
        ),
    )
);


/* Distribuidor / Revendedor 
$meta_boxes[] = array(
    'title'    => 'O que fazemos <style>.rwmb-add-file {display: none}</style>',
    'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-home-oque_fazemos',
    'fields' => array(
        array(
            'name' => 'Revendedor',
            'id'   => "{$prefix}revendedor",
            'type' => 'textarea',
            'columns' => 6,
        ),
        array(
            'name' => 'Distribuidor',
            'id'   => "{$prefix}distribuidor",
            'type' => 'textarea',
            'columns' => 6,
        ),
    )
);
*/


/* servicoS */
/* Home - 1o. campo 

$meta_boxes[] = array(
    'title'    => 'Serviços para Home <style>.rwmb-add-file {display: none}</style>',
      'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-home-servicos',
    'fields' => array(
        array(
            'name' => 'servico 1',
            'id'   => "{$prefix}servico-img01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'servico 2',
            'id'   => "{$prefix}servico-img02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'servico 3',
            'id'   => "{$prefix}servico-img03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 1',
            'id'   => "{$prefix}servico-titulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 2',
            'id'   => "{$prefix}servico-titulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 3',
            'id'   => "{$prefix}servico-titulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto 1',
            'id'   => "{$prefix}servico-texto01",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto 2',
            'id'   => "{$prefix}servico-texto02",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto 3',
            'id'   => "{$prefix}servico-texto03",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 1',
            'id'   => "{$prefix}servico-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 2',
            'id'   => "{$prefix}servico-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 3',
            'id'   => "{$prefix}servico-link03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'servico 4',
            'id'   => "{$prefix}servico-img04",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'servico 5',
            'id'   => "{$prefix}servico-img05",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'servico 6',
            'id'   => "{$prefix}servico-img06",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 4',
            'id'   => "{$prefix}servico-titulo04",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 5',
            'id'   => "{$prefix}servico-titulo05",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 6',
            'id'   => "{$prefix}servico-titulo06",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto 4',
            'id'   => "{$prefix}servico-texto04",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto 5',
            'id'   => "{$prefix}servico-texto05",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto 6',
            'id'   => "{$prefix}servico-texto06",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 4',
            'id'   => "{$prefix}servico-link04",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 5',
            'id'   => "{$prefix}servico-link05",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link 6',
            'id'   => "{$prefix}servico-link06",
            'type' => 'text',
            'columns' => 4,
        ),
        
    )
);
*/
/*
$meta_boxes[] = array(
    'title'    => 'Partners <style>.rwmb-add-file {display: none}</style>',
      'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-home-partners',
    'fields' => array(
        array(
            'name' => 'Partners',
            'id'   => "{$prefix}partners-img",
            'type' => 'image',
            'columns' => 12,
        ),
    )
);
*/
/* Onde comprar 
$meta_boxes[] = array(
    'title'    => 'Onde Comprar <style>.rwmb-add-file {display: none}</style>',
    'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-home-ondecomprar',
    'fields' => array(
        array(
            'name' => 'Onde Comprar',
            'id'   => "{$prefix}ondecomprar",
            'type' => 'textarea',
            'columns' => 12,
        ),
    )
);
*/
/* GALERIA CHAMADA 
$meta_boxes[] = array(
    'title'    => 'Galeria <style>.rwmb-add-file {display: none}</style>',
      'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-galeria',
    'fields' => array(
        array(
            'name' => 'Fotos da Galeria',
            'id'   => "{$prefix}galeria",
            'type' => 'image',
            'columns' => 12,
        ),
    )
);
*/
/* UPLOAD FILE 
$meta_boxes[] = array(
    'title'    => 'PDFs <style>.rwmb-add-file {display: none}</style>',
    'pages' => array( 'page' ),
    'include'  => array(
    'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-pdfs',
    'fields' => array(
        array(
            'name' => 'PDFs 1',
            'id'   => "{$prefix}laudos01",
            'type' => 'file',
            'columns' => 3,
        ),
        array(
            'name' => 'PDFs 2',
            'id'   => "{$prefix}laudos02",
            'type' => 'file',
            'columns' => 3,
        ),
        array(
            'name' => 'PDFs 3',
            'id'   => "{$prefix}laudos03",
            'type' => 'file',
            'columns' => 3,
        ),
        array(
            'name' => 'PDFs 4',
            'id'   => "{$prefix}laudos04",
            'type' => 'file',
            'columns' => 3,
        ),
        array(
            'name' => 'Descrição 1',
            'id'   => "{$prefix}laudos01-descricao",
            'type' => 'text',
            'columns' => 3,
        ),
        array(
            'name' => 'Descrição 2',
            'id'   => "{$prefix}laudos02-descricao",
            'type' => 'text',
            'columns' => 3,
        ),
        array(
            'name' => 'Descrição 3',
            'id'   => "{$prefix}laudos03-descricao",
            'type' => 'text',
            'columns' => 3,
        ),
        array(
            'name' => 'Descrição 4',
            'id'   => "{$prefix}laudos04-descricao",
            'type' => 'text',
            'columns' => 3,
        ),
    )
);
*/

/* VIDEOS
$meta_boxes[] = array(
    'title'    => 'Videos para Home <style>.rwmb-add-file {display: none}</style>',
      'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'home.php' ),
    ),
    'id'       => 'pagina-home-videos',
    'fields' => array(
        array(
            'name' => 'Video 1',
            'id'   => "{$prefix}video-img01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Video 2',
            'id'   => "{$prefix}video-img02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Video 3',
            'id'   => "{$prefix}video-img03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 1',
            'id'   => "{$prefix}video-titulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 2',
            'id'   => "{$prefix}video-titulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 3',
            'id'   => "{$prefix}video-titulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        
        array(
            'name' => 'Link para Video 1 (Youtube)',
            'id'   => "{$prefix}video-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link para Video 2 (Youtube)',
            'id'   => "{$prefix}video-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link para Video 3 (Youtube)',
            'id'   => "{$prefix}video-link03",
            'type' => 'text',
            'columns' => 3,
        ),

        array(
            'name' => 'Video 4',
            'id'   => "{$prefix}video-img04",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Video 5',
            'id'   => "{$prefix}video-img05",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Video 6',
            'id'   => "{$prefix}video-img06",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 4',
            'id'   => "{$prefix}video-titulo04",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 5',
            'id'   => "{$prefix}video-titulo05",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Titulo 6',
            'id'   => "{$prefix}video-titulo06",
            'type' => 'text',
            'columns' => 4,
        ),
        
        array(
            'name' => 'Link para Video 4 (Youtube)',
            'id'   => "{$prefix}video-link04",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link para Video 5 (Youtube)',
            'id'   => "{$prefix}video-link05",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link para Video 6 (Youtube)',
            'id'   => "{$prefix}video-link06",
            'type' => 'text',
            'columns' => 3,
        ),
    )
);

/*
$meta_boxes[] = array(
    'title'    => 'Conteudo da Pagina Simples',
      'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template_simple.php' ),
    ),
    'id'       => 'page-simplepage-topcontent',
    'fields' => array(
        array(
            'name' => 'Conteudo',
            'id'   => "{$prefix}simplepage-content",
            'type' => 'textarea',
            'columns' => 12,
        ),
    )
);
*/
/*
$meta_boxes[] = array(
    'title'    => 'Primeiro Campo',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-home.php' ),
    ),
    'id'       => 'pagina-home-primeiro-campo',
    'fields' => array(
        array(
            'name' => '',
            'id'   => "{$prefix}home01block-foto01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home01block-foto02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home01block-foto03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home01block-titulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home01block-titulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home01block-titulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Subtitulo',
            'id'   => "{$prefix}home01block-subtitulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Subtitulo',
            'id'   => "{$prefix}home01block-subtitulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Subtitulo',
            'id'   => "{$prefix}home01block-subtitulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home01block-texto01",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home01block-texto02",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home01block-texto03",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home01block-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home01block-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home01block-link03",
            'type' => 'text',
            'columns' => 4,
        ),
    )
);

$meta_boxes[] = array(
    'title'    => 'Segundo Campo',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-home.php' ),
    ),
    'id'       => 'pagina-home-segundo-campo',
    'fields' => array(
        array(
            'name' => 'Incorporar Vídeo',
            'id'   => "{$prefix}home02block-video",
            'type' => 'oembed',
        ),
    )
);

$meta_boxes[] = array(
    'title'    => 'Terceiro Campo',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-home.php' ),
    ),
    'id'       => 'pagina-home-terceiro-campo',
    'fields' => array(
        array(
            'name' => '',
            'id'   => "{$prefix}home02block-foto01",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home02block-foto02",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => '',
            'id'   => "{$prefix}home02block-foto03",
            'type' => 'image',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home02block-titulo01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home02block-titulo02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}home02block-titulo03",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home02block-texto01",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home02block-texto02",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}home02block-texto03",
            'type' => 'textarea',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home02block-link01",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home02block-link02",
            'type' => 'text',
            'columns' => 4,
        ),
        array(
            'name' => 'Link',
            'id'   => "{$prefix}home02block-link03",
            'type' => 'text',
            'columns' => 4,
        ),
    )
);

*/
/* Tratamentos */
/*
$meta_boxes[] = array(
	'id' => 'tratamentos-options',
	'title' => __( 'Fotos do Tratamento', 'rwmb' ),
	'pages' => array( 'tratamentos' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'Fotos', 'rwmb' ),
			'id'   => "{$prefix}fotos",
			'type' => 'plupload_image',
			'std'  => '',
            'max_file_uploads' => 50,
		),
    
	),
);
*/
/* Unidades */
/*
$meta_boxes[] = array(
	'id' => 'unidades-options',
	'title' => __( 'Detalhes da Unidade', 'rwmb' ),
	'pages' => array( 'unidades' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'Endereço', 'rwmb' ),
			'id'   => "{$prefix}unidade-end",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'CEP', 'rwmb' ),
			'id'   => "{$prefix}unidade-cep",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'Telefone', 'rwmb' ),
			'id'   => "{$prefix}unidade-tel",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'Google Maps', 'rwmb' ),
			'id'   => "{$prefix}unidade-loc",
			'type' => 'map',
			'std'  => '',
		),
	),
);
*/
/* Depoimentos */
/*
$meta_boxes[] = array(
	'id' => 'depoimentos_options',
	'title' => __( 'Opções de Depoimentos', 'rwmb' ),
	'pages' => array( 'depoimentos' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'ID do Vídeo', 'rwmb' ),
			'id'   => "{$prefix}id-depoimento",
			'type' => 'text',
			'std'  => '',
      'desc' => '<br />Ex: https://www.youtube.com/watch?v=<b>BJ78bwKOUs4</b><br />A imagem do vídeo será gerada automaticamente.',
		),
	),
);
*/
/* Franquias */
/*
$meta_boxes[] = array(
    'title'    => 'Textos',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-franquias.php' ),
    ),
    'id'       => 'pagina-textos',
    'fields' => array(
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #1',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo01",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto01",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #2',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo02",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto02",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #3',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo03",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto03",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #4',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo04",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto04",
            'type' => 'wysiwyg',
        ),
        array(
            'type' => 'heading',
            'name' => 'Campo de Texto #5',
        ),
        array(
            'name' => 'Título',
            'id'   => "{$prefix}titulo05",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}texto05",
            'type' => 'wysiwyg',
        ),
    )
);
*/
/* Contato */
/*
$meta_boxes[] = array(
    'title'    => 'Textos',
	  'pages' => array( 'page' ),
    'include'  => array(
      'template' => array( 'template-contato.php' ),
    ),
    'id'       => 'pagina-contato',
    'fields' => array(
        array(
            'name' => 'Título',
            'id'   => "{$prefix}contato-titulo",
            'type' => 'text',
        ),
        array(
            'name' => 'Texto',
            'id'   => "{$prefix}contato-texto",
            'type' => 'textarea',
        ),
    )
);
*/
/* servicos */
/*
$meta_boxes[] = array(
	'id' => 'servicos_options',
	'title' => __( 'Descrição do servico', 'rwmb' ),
	'pages' => array( 'loja' ),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => true,
	'fields' => array(
		array(
			'name' => __( 'Nome', 'rwmb' ),
			'id'   => "{$prefix}prod-nome",
			'type' => 'text',
			'std'  => '',
		),
		array(
			'name' => __( 'Descrição', 'rwmb' ),
			'id'   => "{$prefix}prod-descr",
			'type' => 'wysiwyg',
			'std'  => '',
		),
    array(
        'type' => 'heading',
        'name' => 'Preço',
    ),
		array(
			'name' => __( 'De (R$)', 'rwmb' ),
			'id'   => "{$prefix}prod-preco-de",
			'type' => 'text',
			'std'  => '',
      'columns' => 3,
		),
		array(
			'name' => __( 'Por (R$)', 'rwmb' ),
			'id'   => "{$prefix}prod-preco-por",
			'type' => 'text',
			'std'  => '',
      'columns' => 3,
		),
		array(
			'name' => __( 'servico em Promoção', 'rwmb' ),
			'id'   => "{$prefix}prod-promo",
			'type' => 'checkbox',
      'std'  => 0,
      'columns' => 3,
		),
		array(
			'name' => __( 'Desconto (%)', 'rwmb' ),
			'id'   => "{$prefix}prod-descont",
			'type' => 'text',
      'std'  => '',
      'columns' => 3,
		),
	)
);
*/
/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );