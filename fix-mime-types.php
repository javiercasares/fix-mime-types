<?php
/**
 * Plugin Name: Fix Media MIME Types (WP-CLI only)
 * Description: Fixes incorrect MIME types in the Media Library using WP-CLI.
 * Requires at least: 6.4
 * Requires PHP: 8.2
 * Version: 1.0
 * Author: Javier Casares
 * Author URI: https://www.javiercasares.com/
 * License: GPL-3.0-or-later
 * License URI: https://spdx.org/licenses/GPL-3.0-or-later.html
 * Text Domain: fix-mime-types
 * Domain Path: /languages
 *
 * @package fix-mime-types
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Early exit if not running via WP-CLI.
 */
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
	return;
}

/**
 * Require the main command class for WP-CLI.
 */
require_once plugin_dir_path( __FILE__ ) . 'class-fix-mime-types-command.php';

/**
 * Register the WP-CLI command 'fix-mime' with the Fix_Mime_Types_Command class.
 */
WP_CLI::add_command( 'fix-mime', 'Fix_Mime_Types_Command' );
