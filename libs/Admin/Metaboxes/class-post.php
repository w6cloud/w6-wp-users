<?php
/**
 * Post metabox
 *
 * This class handles the post metabox
 *
 * @package   W6\Wp_Users
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-users
 */

namespace W6\Wp_Users\Admin\Metaboxes;

/**
 * This class handles the post metabox
 *
 * @package   W6\Wp_Users\Admin\Metaboxes\Post
 */
class Post {

	/**
	 * Metabox initiation
	 *
	 * @return void
	 */
	public static function init() {

		$box = \W6\Wp_Users\Wp_Users::instance()->titan->createMetaBox( array(
			'name' => 'Restricted content',
			'context' => 'side',
			'priority' => 'low',
			'post_type' => array(
				'page',
				'post',
			),
		) );

		// Content types.
		$box->createOption( array(
			'desc' => esc_html__( 'User must be logged-in to view this content', 'w6-wp-users' ),
			'id'   => 'users_restricted_content',
			'type' => 'checkbox',
			'default' => false,
		) );

	}
}
