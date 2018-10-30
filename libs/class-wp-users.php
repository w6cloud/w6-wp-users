<?php
/**
 * Main W6-Wp-Users class
 *
 * This class handles the plugin's initialisation
 * - Init admin page
 * - Init admin metaboxes
 *
 * @package   W6\Wp_Users
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-users
 */

namespace W6\Wp_Users;

use \W6\Wp_Users\Utils\File_System as FS;

/**
 * This class handles the plugin's initialisation
 *
 * @package   W6\Wp_Users\Wp_Users
 */
class Wp_Users {

	use Utils\Singleton;

	/**
	 * Titan fralework instance
	 * 
	 * @var TitanFramework     
	 */
	public $titan;

	/**
	 * Plugin initiation
	 *
	 * @return void
	 */
	public static function init() {

		$t = self::instance();

		if(!class_exists('\TitanFramework')){
			require_once FS::path( 'vendor/gambitph/titan-framework/titan-framework-embedder.php' );
		}
		$t->titan = \TitanFramework::getInstance( 'w6-wp-seo' );

		if ( is_admin() ) {
			Admin\Panels::init();
			Admin\Metaboxes::init();
		} else {
		}
	}
}
