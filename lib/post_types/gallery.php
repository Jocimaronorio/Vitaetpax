<?php function galeria() {

	$labels = array(
		'name'                => _x( 'Galerias', 'Post Type General Name', 'galeria' ),
		'singular_name'       => _x( 'Galeria', 'Post Type Singular Name', 'galeria' ),
		'menu_name'           => __( 'Galerias', 'galeria' ),
		'name_admin_bar'      => __( 'Galerias', 'galeria' ),
		'parent_item_colon'   => __( 'Galeria Pai', 'galeria' ),
		'all_items'           => __( 'Todas as Galerias', 'galeria' ),
		'add_new_item'        => __( 'Adicionar Galeria', 'galeria' ),
		'add_new'             => __( 'Adicionar Novo', 'galeria' ),
		'new_item'            => __( 'Nova Galeria', 'galeria' ),
		'edit_item'           => __( 'Editar Galeria', 'galeria' ),
		'update_item'         => __( 'Atualizar Galeria', 'galeria' ),
		'view_item'           => __( 'Ver Galeria', 'galeria' ),
		'search_items'        => __( 'Procurar por Galeria', 'galeria' ),
		'not_found'           => __( 'Galeria não encontrada', 'galeria' ),
		'not_found_in_trash'  => __( 'Não encontrado no lixo', 'galeria' ),
	);
	$args = array(
		'label'               => __( 'galeria', 'galeria' ),
		'description'         => __( 'Descrição da Galeria', 'galeria' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt2',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'galeria', $args );

}

// Hook into the 'init' action
add_action( 'init', 'galeria', 0 );?>