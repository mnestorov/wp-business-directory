<?php

if ( ! class_exists( 'BD_Register_Taxonomies' ) ) {
	/**
	 * Class BD_Register_Taxonomies
	 *
	 * @package    BusinessDirectoryPostTypes
	 * @author     Martin Nestorov
	 */
	class BD_Register_Taxonomies {
		/**
		 * Constructor
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'register_size_taxonomy' ) );
			add_action( 'init', array( $this, 'register_location_taxonomy' ) );
		}

		/**
		 * Register the `Size` taxonomy
		 *
		 * @return void
		 */
		public function register_size_taxonomy() {

			/**
			 * Taxonomy: Sizes
			 */

			$labels = array(
				'name'                  => __( 'Sizes', MN_BD_DOMAIN ),
				'singular_name'         => __( 'Size', MN_BD_DOMAIN ),
				'add_new_item'          => __( 'Add New Size', MN_BD_DOMAIN ),
				'choose_from_most_used' => __( 'Choose from the most common sizes', MN_BD_DOMAIN ),
				'items_list_navigation' => __( 'Browse Business by size', MN_BD_DOMAIN ),
			);

			$args = array(
				'label'                 => __( 'Sizes', MN_BD_DOMAIN ),
				'labels'                => $labels,
				'public'                => true,
				'publicly_queryable'    => true,
				'hierarchical'          => false,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'show_in_nav_menus'     => true,
				'query_var'             => true,
				'rewrite'               =>
					array(
						'slug'       => 'size',
						'with_front' => true,
					),
				'show_admin_column'     => true,
				'show_in_rest'          => true,
				'show_tagcloud'         => false,
				'rest_base'             => 'size',
				'rest_controller_class' => 'WP_REST_Terms_Controller',
				'show_in_quick_edit'    => true,
				'show_in_graphql'       => false,
			);

			// Associate post types.
			$post_types = array( 'business' );

			register_taxonomy( 'size', $post_types, $args );
		}

		/**
		 * Register `location` taxonomy
		 *
		 * @return void
		 */
		public function register_location_taxonomy() {

			/**
			 * Taxonomy: Sizes
			 */

			$labels = array(
				'name'                  => __( 'Locations', MN_BD_DOMAIN ),
				'singular_name'         => __( 'Location', MN_BD_DOMAIN ),
				'add_new_item'          => __( 'Add New Location', MN_BD_DOMAIN ),
			);

			$args = array(
				'label'                 => __( 'Locations', MN_BD_DOMAIN ),
				'labels'                => $labels,
				'public'                => true,
				'publicly_queryable'    => true,
				'hierarchical'          => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'show_in_nav_menus'     => true,
				'query_var'             => true,
				'rewrite'               =>
					array(
						'hierarchical' => true,
						'with_front'   => true,
					),
				'show_admin_column'     => true,
				'show_in_rest'          => true,
				'show_tagcloud'         => false,
				'rest_base'             => 'location',
				'rest_controller_class' => 'WP_REST_Terms_Controller',
				'show_in_quick_edit'    => true,
				'show_in_graphql'       => false,
			);

			// Associate post types.
			$post_types = array( 'business', 'event' );

			register_taxonomy( 'location', $post_types, $args );
		}
	}
}
