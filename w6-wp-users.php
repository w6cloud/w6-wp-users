<?php
/**
 * Users plugin
 *
 * WordPress default users enhanced
 *
 * @package   w6\wp_users
 * @since     1.0.0
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-users
 *
 * @wordpress-plugin
 * Plugin Name:   W6 WordPress Users
 * Plugin URI:    https://github.com/web6-fr/w6-wp-users
 * Description:   WordPress default users enhanced
 * Version:       1.0.0
 * Author:        WEB6
 * Author URI:    https://web6.fr
 * License:       GPL-3.0
 * License URI:   https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:   w6-wp-users
 * Domain Path:   /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin version.
 */
define( 'W6\Wp_Users\VERSION', '1.0.0' );

/**
 * Plugin root folder.
 */
define( 'W6\Wp_Users\ROOT', dirname( __FILE__ ) );

/**
 * Plugin root url.
 */
define( 'W6\Wp_Users\URL', ltrim( plugin_dir_url( __FILE__ ) ), '/' );

/**
 * Functions
 */
require_once 'libs/functions.php';

/**
 * Autoload
 */
spl_autoload_register( '\W6\Wp_Users\autoload' );

/**
 * Composer
 */
require_once 'vendor/autoload.php';

/**
 * Init plugin
 */
\W6\Wp_Users\Wp_Users::init();
