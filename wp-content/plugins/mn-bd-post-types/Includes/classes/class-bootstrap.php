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
			add_action( 'plugins_loaded', array( $this, 'dx_include' ), 10 );
			add_action( 'init', array( $this, 'dx_run' ), 0 );
		}

		/**
		 * Includes all the plugin classes with priority
		 *
		 * @return void
		 */
		public function dx_include() {
			// Include the classes.
			require_once 'class-bd-register-post-types.php';
			require_once 'class-bd-register-taxonomies.php';
		}

		/**
		 * Instantiate our plugin classes
		 *
		 * @return void
		 */
		public function dx_run() {
			$this->loader = new \BD_Register_Post_Types();
			$this->loader = new \BD_Register_Taxonomies();
		}
	}
}