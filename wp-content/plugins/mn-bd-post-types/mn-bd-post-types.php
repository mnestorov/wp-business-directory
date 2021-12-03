<?php
/**
 * Business Directory Post Types and Taxonomies
 *
 * @package           BusinessDirectoryPostTypes
 * @author            Martin Nestorov
 * @copyright         2021 Martin Nestorov
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Business Directory - Post Types and Taxonomies
 * Plugin URI:        https://github.com/mnestorov/business-directory/plugins/mn-bd-post-types
 * Description:       A simple plugin to create a custom post type and taxonomies related to a business directory.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Martin Nestorov
 * Author URI:        https://github.com/mnestorov
 * Text Domain:       mn-bd-cpt
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/mnestorov/
 */

/*
`Business Directory Post Types and Taxonomies` is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
`Business Directory Post Types and Taxonomies` is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with `Business Directory Post Types and Taxonomies`. If not, see {URI to Plugin License}.
*/

/**
 * If this file is called directly, then abort execution
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define plugin version
 */
if ( ! defined( 'MN_BD_VERSION' ) ) {
	define( 'MN_BD_VERSION', '1.0.0' );
}

/**
 * Define domain constant for translation
 */
if ( ! defined( 'MN_BD_DOMAIN' ) ) {
	define( 'MN_BD_DOMAIN', 'mn-bd-cpt' );
}

/**
 * Define path constant for plugin hooks
 */
if ( ! defined( 'MN_BDCPT_PATH' ) ) {
	define( 'MN_BDCPT_PATH', plugin_dir_url( __FILE__ ) );
}

// Include the bootstrap (master) class.
require_once 'includes/classes/class-bootstrap.php';

// Instantiate the bootstrap (master) class.
$bootstrap = new \MN_BD_CPT\Bootstrap();
