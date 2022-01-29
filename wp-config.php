<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5BaTnSJ4SD3m52xOsSwuTDcd6fVwXBjeBm2FNApjmrK25fCsFN//5sQ1mfrpeCZq4BweZAOXcO6z+XO+4izedQ==');
define('SECURE_AUTH_KEY',  'mFknaKsIFHvpdPLn/fUmhwhxGDkZgzKKbhMAJAxKt5mh8iGcG72HyXQQu3Pyk1zpEUtqx+j3rDp2TaUfXOTB0Q==');
define('LOGGED_IN_KEY',    'FvxFpLv/xd4QPwgdTo+Fu17aDbhrMAws6cTKnyLA3M8n4H1/vABfj9O6jTReV4CoM80yS25wUpAeFjJJHGRCKg==');
define('NONCE_KEY',        'oDCHvyZLNU1kCYN9CNrfva9vWrgeVDcMbpiirpQ2tVGZgDO6ejIridYDdPjzUtsOswOpRdtkqvVLW+lFvUMZyw==');
define('AUTH_SALT',        'fq7PRM91b/fm0uv25x4G5a4+tVYdN2Ws4biKp6p0vX/f9V6XEhN1e2p/wgUVThh+YJIpj8HYjzNaKLOQgjDDyw==');
define('SECURE_AUTH_SALT', '2P4pB33naBrlnQhBHdfX+LMEFIzEVu7N+oMeVQVTJTLvlbJQVHoSvbPK/LAwRr44iPTgBlYrIyKm/sdk1Xkv3g==');
define('LOGGED_IN_SALT',   '4EIYyuDscRSMxkMuBojSVIX2Fbp1lPGI1oHFvyTnooNU9+Lf0nSeUk2AjB4+mdXw0rErD8ciO5hsqt3N/dvSNw==');
define('NONCE_SALT',       'qNyw5cZa486U8KZdvO8l/sxsYq/A78jO2tWjXExcvKVFuGjCtaEHOOKmN+zQUnLRcggnJjlNlM51nbhqapYxNw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
