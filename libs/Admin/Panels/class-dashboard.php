<?php
/**
 * Dashboard panel
 *
 * This class handles the dashboard panel
 *
 * @package   W6\Wp_Users
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-users
 */

namespace W6\Wp_Users\Admin\Panels;

/**
 * This class handles the dashboard panel
 *
 * @package   W6\Wp_Users\Admin\Panels\Dashboard
 */
class Dashboard {

	/**
	 * Panel initiation
	 *
	 * @param object $panel The options page.
	 *
	 * @return void
	 */
	public static function init( $panel ) {

		Dashboard\General::init( $panel );

	}
}
