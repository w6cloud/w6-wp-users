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
 * @link      https://github.com/web6-fr/w6-wp-seo
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
			'name' => 'Users',
			'desc' => esc_html__( 'Description of the metabox.', 'w6-wp-users' ),
			'post_type' => array(
				'page',
				'post',
			),
		) );

	}
}
