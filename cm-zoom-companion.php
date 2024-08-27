<?php
/**
 * Plugin Name:       CM Zoom Companion
 * Description:       CM Zoom Companion provides additional feature for the zoom theme
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Version:           1.0.0
 * Author:            codemanas
 * Author URI:        https://cmblocks.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       cm-zoom-companion
 *
 */

defined( 'ABSPATH' ) || exit;
defined( 'CM_ZOOM_COMPANION_VERSION' ) || define( 'CM_ZOOM_COMPANION_VERSION', '1.0.0' );
defined( 'CM_ZOOM_COMPANION_FILE_PATH' ) || define( 'CM_ZOOM_COMPANION_FILE_PATH', __FILE__ );
defined( 'CM_ZOOM_COMPANION_DIR_PATH' ) || define( 'CM_ZOOM_COMPANION_DIR_PATH', dirname( __FILE__ ) );
defined( 'CM_ZOOM_COMPANION_DIR_PATH_URL' ) || define( 'CM_ZOOM_COMPANION_DIR_PATH_URL', plugin_dir_url( __FILE__ ) );
require_once CM_ZOOM_COMPANION_DIR_PATH . '/includes/Bootstrap.php';