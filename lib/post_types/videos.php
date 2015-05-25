<?php
// Register Custom Post Type
function videos() {

	$labels = array(
		'name'                => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Videos', 'text_domain' ),
		'name_admin_bar'      => __( 'Videos', 'text_domain' ),
		'parent_item_colon'   => __( 'Video Pai', 'text_domain' ),
		'all_items'           => __( 'Todos os Videos', 'text_domain' ),
		'add_new_item'        => __( 'Adicionar novo Video', 'text_domain' ),
		'add_new'             => __( 'Adicionar novo', 'text_domain' ),
		'new_item'            => __( 'Novo Video', 'text_domain' ),
		'edit_item'           => __( 'Editar Video', 'text_domain' ),
		'update_item'         => __( 'Atualizar Video', 'text_domain' ),
		'view_item'           => __( 'Ver Video', 'text_domain' ),
		'search_items'        => __( 'Procurar por Video', 'text_domain' ),
		'not_found'           => __( 'Video não encontrado', 'text_domain' ),
		'not_found_in_trash'  => __( 'Não encontrado na Lixeira', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'videos', 'text_domain' ),
		'description'         => __( 'Videos', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-video',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'videos', $args );

}

// Hook into the 'init' action
add_action( 'init', 'videos', 0 );?>