<?php
/**
 * General tab of dashboard panel
 *
 * This class handles the general tab of the dashboard panel
 *
 * @package   W6\Wp_Users
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-users
 */

namespace W6\Wp_Users\Admin\Panels\Dashboard;

/**
 * This class handles the general tab of the dashboard panel
 *
 * @package   W6\Wp_Users\Admin\Panels\Dashboard\General
 */
class General {

	/**
	 * Tab initiation
	 *
	 * @param object $panel The panel.
	 *
	 * @return void
	 */
	public static function init( $panel ) {

		$tab = $panel->createTab(array(
			'name' => esc_html__( 'General', 'w6-wp-users' ),
			'desc' => esc_html__( 'General settings', 'w6-wp-users' ),
		));


		// Content types.
		$tab->createOption( array(
			'name' => esc_html__( 'Restricted content types', 'w6-wp-users' ),
			'id'   => 'general_restricted_content_types',
			'type' => 'multicheck-post-types',
			'desc' => esc_html__( 'Check the post types you want to restrict access only to logged in users.', 'w6-wp-users' ),
		) );

		// Meta tags - Save button.
		$tab->createOption( array(
			'type' => 'save',
		) );

	}
}
