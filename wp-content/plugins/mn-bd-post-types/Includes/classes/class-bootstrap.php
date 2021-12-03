<?php
/**
 * Managing plugin dependencies and loading the plugin.
 *
 * @package BusinessDirectoryPostTypes
 * @author  Martin Nestorov
 */

namespace MN_BD_CPT {

	/**
	 * Loading all dependencies
	 */
	class Bootstrap {

		/**
		 * Registering all classes that power the plugin
		 *
		 * @var object
		 */
		protected $loader;

		/**
		 * Constructor
		 */
		public function __construct() {
			add_action( 'plugins_loaded', array( $this, 'include' ), 10 );
			add_action( 'init', array( $this, 'run' ), 0 );
			register_activation_hook( MN_BDCPT_PATH, array( $this, 'rewrite_flush' ) );
		}

		/**
		 * Includes all the plugin classes with priority
		 *
		 * @return void
		 */
		public function include() {
			// Include the classes.
			require_once 'class-bd-register-post-types.php';
			require_once 'class-bd-register-taxonomies.php';
		}

		/**
		 * Instantiate our plugin classes
		 *
		 * @return void
		 */
		public function run() {
			$this->loader = new \BD_Register_Post_Types();
			$this->loader = new \BD_Register_Taxonomies();
		}

		/**
		 * Get permalinks to work when plugin is activated
		 *
		 * @return void
		 */
		public function rewrite_flush() {
			$this->run();
			flush_rewrite_rules();
		}
	}
}
