<?php
/**
 * Admin panels
 *
 * This class handles the admin panels
 *
 * @package   W6\Wp_Users
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-users
 */

namespace W6\Wp_Users\Admin;

/**
 * This class handles the admin panels
 *
 * @package   W6\Wp_Users\Admin\Panel
 */
class Panels {

	/**
	 * Panels initiation
	 *
	 * @return void
	 */
	public static function init() {
		add_action( 'tf_create_options', '\W6\Wp_Users\Admin\Panels::create' );
	}

	/**
	 * Create the panels
	 *
	 * @return void
	 */
	public static function create() {

		$options_page = \W6\Wp_Users\Wp_Users::instance()->titan->createAdminPanel( array(
			'name' => esc_html__( 'W6 Users', 'w6-wp-users' ),
			'id'   => 'w6-wp-users',
			'parent' => 'users.php',
			'desc' => esc_html__( 'Description displayed just below the title of this admin page.', 'w6-wp-users' ),
		) );

		Panels\Dashboard::init( $options_page );
		
	}
}
