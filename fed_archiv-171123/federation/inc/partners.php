<?php

add_action( 'init', 'register_cpt_partners' );
function register_cpt_partners() {

	$labels = array(
		'name' => __( 'Партнеры', 'partners' ),
		'singular_name' => __( 'Партнеры', 'partners' ),
		'add_new' => __( 'Добавить Партнера', 'partners' ),
		'add_new_item' => __( 'Добавить Партнера', 'partners' ),
		'edit_item' => __( 'Редактировать данные по Партнеру', 'partners' ),
		'new_item' => __( 'Новый Партнер', 'partners' ),
		'view_item' => __( 'Посмотреть данные Партнера', 'partners' ),
		'search_items' => __( 'Найти данные Партнера', 'partners' ),
		'not_found' => __( 'Ничего не найдено', 'partners' ),
		'not_found_in_trash' => __( 'Ничего не найдено в корзине', 'partners' ),
		'parent_item_colon' => __( 'Родитель:', 'partners' ),
		'menu_name' => __( 'Партнеры', 'partners' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'comments', 'revisions', 'page-attributes' ),
		//'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies' => array(  ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		//'menu_icon' => 'icon.png',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'partners', $args );
}

?>
