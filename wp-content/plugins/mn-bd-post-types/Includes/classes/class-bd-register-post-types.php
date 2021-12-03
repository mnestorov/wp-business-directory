<?php

if ( ! class_exists( 'BD_Register_Post_Types' ) ) {
	/**
	 * Class BD_Register_Post_Types
	 *
	 * @package    BusinessDirectoryPostTypes
	 * @author     Martin Nestorov
	 */
	class BD_Register_Post_Types {
		/**
		 * Constructor
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'register_business_type' ) );
			add_action( 'init', array( $this, 'register_event_type' ) );
		}

		/**
		 * Register the `Business` post type
		 *
		 * @return void
		 */
		public function register_business_type() {

			/**
			 * Post Type: Businesses
			 */

			$labels = array(
				'name'                  => __( 'Businesses', MN_BD_DOMAIN ),
				'singular_name'         => __( 'Business', MN_BD_DOMAIN ),
				'add_new'               => __( 'Add New Business', MN_BD_DOMAIN ),
				'add_new_item'          => __( 'Add New Business', MN_BD_DOMAIN ),
				'search_items'          => __( 'Find a Business', MN_BD_DOMAIN ),
				'featured_image'        => __( 'Business Logo', MN_BD_DOMAIN ),
				'set_featured_image'    => __( 'Set Business Logo', MN_BD_DOMAIN ),
				'remove_featured_image' => __( 'Remove Logo', MN_BD_DOMAIN ),
				'use_featured_image'    => __( 'Use Logo', MN_BD_DOMAIN ),
				'archives'              => __( 'Business Directory', MN_BD_DOMAIN ),
			);

			$args = array(
				'label'                 => __( 'Businesses', MN_BD_DOMAIN ),
				'labels'                => $labels,
				'description'           => '',
				'public'                => true,
				'publicly_queryable'    => true,
				'show_ui'               => true,
				'show_in_rest'          => true,
				'rest_base'             => '',
				'rest_controller_class' => 'WP_REST_Posts_Controller',
				'has_archive'           => 'businesses',
				'show_in_menu'          => true,
				'show_in_nav_menus'     => true,
				'delete_with_user'      => false,
				'exclude_from_search'   => false,
				'capability_type'       => 'post',
				'map_meta_cap'          => true,
				'hierarchical'          => false,
				'rewrite'               =>
					array(
						'slug'       => 'business',
						'with_front' => true,
					),
				'query_var'             => true,
				'menu_icon'             => 'dashicons-building',
				'supports'              => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies'            => array( 'post_tag' ),
				'show_in_graphql'       => false,
			);

			register_post_type( 'business', $args );
		}

		/**
		 * Register the `Events` post type
		 *
		 * @return void
		 */
		public function register_event_type() {

			/**
			 * Post Type: Events
			 */

			$labels = array(
				'name'          => __( 'Events', MN_BD_DOMAIN ),
				'singular_name' => __( 'Event', MN_BD_DOMAIN ),
				'add_new'       => __( 'Add New Event', MN_BD_DOMAIN ),
				'add_new_item'  => __( 'Add New Event', MN_BD_DOMAIN ),
				'search_items'  => __( 'Find an Event', MN_BD_DOMAIN ),
				'archives'      => __( 'Evenets Calendar', MN_BD_DOMAIN ),
			);

			$args = array(
				'label'                 => __( 'Events', MN_BD_DOMAIN ),
				'labels'                => $labels,
				'description'           => '',
				'public'                => true,
				'publicly_queryable'    => true,
				'show_ui'               => true,
				'show_in_rest'          => true,
				'rest_base'             => '',
				'rest_controller_class' => 'WP_REST_Posts_Controller',
				'has_archive'           => 'events',
				'show_in_menu'          => true,
				'show_in_nav_menus'     => true,
				'delete_with_user'      => false,
				'exclude_from_search'   => false,
				'capability_type'       => 'post',
				'map_meta_cap'          => true,
				'hierarchical'          => false,
				'rewrite'               =>
					array(
						'slug'       => 'events',
						'with_front' => true,
					),
				'query_var'             => true,
				'menu_icon'             => 'dashicons-calendar',
				'supports'              => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies'            => array( 'post_tag' ),
				'show_in_graphql'       => false,
			);

			register_post_type( 'event', $args );
		}
	}
}
