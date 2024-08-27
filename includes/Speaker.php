<?php

namespace Codemanas\CmZoomCompanion;

class Speaker {
	private static ?Speaker $_instance = null;

	public static function get_instance(): ?Speaker {
		return ( self::$_instance == null ) ? self::$_instance = new self() : self::$_instance;
	}

	protected function __construct() {
		add_action( 'init', [ $this, 'register_speaker' ] );
	}

	public function register_speaker() {
		$labels = array(
			'name'                  => _x( 'Speaker', 'Post type general name', 'cm-zoom-companion' ),
			'singular_name'         => _x( 'Speaker', 'Post type singular name', 'cm-zoom-companion' ),
			'menu_name'             => _x( 'Speaker', 'Admin Menu text', 'cm-zoom-companion' ),
			'name_admin_bar'        => _x( 'Speaker', 'Add New on Toolbar', 'cm-zoom-companion' ),
			'add_new'               => __( 'Add New', 'cm-zoom-companion' ),
			'add_new_item'          => __( 'Add New Speaker', 'cm-zoom-companion' ),
			'new_item'              => __( 'New Speaker', 'cm-zoom-companion' ),
			'edit_item'             => __( 'Edit Speaker', 'cm-zoom-companion' ),
			'view_item'             => __( 'View Speaker', 'cm-zoom-companion' ),
			'all_items'             => __( 'All Speaker', 'cm-zoom-companion' ),
			'search_items'          => __( 'Search Speaker', 'cm-zoom-companion' ),
			'parent_item_colon'     => __( 'Parent Speaker:', 'cm-zoom-companion' ),
			'not_found'             => __( 'No books found.', 'cm-zoom-companion' ),
			'not_found_in_trash'    => __( 'No books found in Trash.', 'cm-zoom-companion' ),
			'featured_image'        => _x( 'Speaker Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cm-zoom-companion' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cm-zoom-companion' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cm-zoom-companion' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cm-zoom-companion' ),
			'archives'              => _x( 'Speaker archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cm-zoom-companion' ),
			'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cm-zoom-companion' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cm-zoom-companion' ),
			'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cm-zoom-companion' ),
			'items_list_navigation' => _x( 'Speaker list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cm-zoom-companion' ),
			'items_list'            => _x( 'Speaker list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cm-zoom-companion' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'cm-speaker' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'show_in_rest'       => true,
		);

		register_post_type( 'cm-speaker', $args );
	}
}