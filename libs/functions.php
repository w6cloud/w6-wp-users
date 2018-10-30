<?php
/**
 * WEB6 WordPress Users
 *
 * WordPress default users enhanced
 *
 * @package   w6\wp_users
 * @since     1.0.0
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/w6-wp-users
 */

namespace W6\Wp_Users;

/**
 * Autoload
 *
 * @param string $class_name Class name.
 */
function autoload( $class_name ) {

	if ( false === strpos( $class_name, 'W6\Wp_Users' ) ) {
		return;
	}

	$parts = explode( '\\', $class_name );
	$parts = array_filter($parts);

	$basename = array_pop( $parts );
	$basename = str_replace( '_', '-', $basename );
	$basename = strtolower( $basename );

	$path = implode( '/', $parts );
	$path = str_replace( 'W6/Wp_Users', 'libs', $path );
	$path = ROOT . '/' . $path;

	$types = array(
		'class',
		'trait',
		'interface',
	);

	foreach ( $types as $type ) {
		$_path = $path . '/' . $type . '-' . $basename . '.php';
		if ( file_exists( $_path ) ) {
			require_once $_path;
			break;
		}
	}
}
