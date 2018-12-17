<?php
/**
 * Check and setup theme's default settings
 *
 * @package understrap
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'understrap_setup_theme_default_settings' ) ) {
	function understrap_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$understrap_posts_index_style = get_theme_mod( 'understrap_posts_index_style' );
		if ( '' == $understrap_posts_index_style ) {
			set_theme_mod( 'understrap_posts_index_style', 'default' );
		}

		// Sidebar position.
		$understrap_sidebar_position = get_theme_mod( 'understrap_sidebar_position' );
		if ( '' == $understrap_sidebar_position ) {
			set_theme_mod( 'understrap_sidebar_position', 'right' );
		}

		// Container width.
		$understrap_container_type = get_theme_mod( 'understrap_container_type' );
		if ( '' == $understrap_container_type ) {
			set_theme_mod( 'understrap_container_type', 'container' );
		}
	}
}

// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Настройки темы', 'Post Type General Name', 'theme_options' ),
        'singular_name'         => _x( 'Настройка', 'Post Type Singular Name', 'theme_options' ),
        'menu_name'             => __( 'Настройки темы', 'theme_options' ),
        'name_admin_bar'        => __( 'Настройки темы', 'theme_options' ),
        'archives'              => __( 'Item Archives', 'theme_options' ),
        'attributes'            => __( 'Item Attributes', 'theme_options' ),
        'parent_item_colon'     => __( 'Parent Item:', 'theme_options' ),
        'all_items'             => __( 'All Items', 'theme_options' ),
        'add_new_item'          => __( 'Add New Item', 'theme_options' ),
        'add_new'               => __( 'Add New', 'theme_options' ),
        'new_item'              => __( 'New Item', 'theme_options' ),
        'edit_item'             => __( 'Edit Item', 'theme_options' ),
        'update_item'           => __( 'Update Item', 'theme_options' ),
        'view_item'             => __( 'View Item', 'theme_options' ),
        'view_items'            => __( 'View Items', 'theme_options' ),
        'search_items'          => __( 'Search Item', 'theme_options' ),
        'not_found'             => __( 'Not found', 'theme_options' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'theme_options' ),
        'featured_image'        => __( 'Featured Image', 'theme_options' ),
        'set_featured_image'    => __( 'Set featured image', 'theme_options' ),
        'remove_featured_image' => __( 'Remove featured image', 'theme_options' ),
        'use_featured_image'    => __( 'Use as featured image', 'theme_options' ),
        'insert_into_item'      => __( 'Insert into item', 'theme_options' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'theme_options' ),
        'items_list'            => __( 'Items list', 'theme_options' ),
        'items_list_navigation' => __( 'Items list navigation', 'theme_options' ),
        'filter_items_list'     => __( 'Filter items list', 'theme_options' ),
    );
    $args = array(
        'label'                 => __( 'Настройка', 'theme_options' ),
        'description'           => __( 'Post Type Description', 'theme_options' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields' ),
        'taxonomies'            => array( 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 100,
        'menu_icon'             => 'dashicons-id-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => false,
    );
    register_post_type( 'apf-theme-options', $args );

}
add_action( 'init', 'custom_post_type', 0 );
