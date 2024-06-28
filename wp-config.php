<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2n1YTrZ7MU3dprP6TilfQIbXjJwq7xxpVeIaikkllz3oOUoqMtCJoa6pV7gAqWXr' );
define( 'SECURE_AUTH_KEY',  'tEKoGUKbztQBUkBSWKAnDHc1Sbte54NTrTy1Y9ByayuCzB0k2kAV2VopD6zI1GDE' );
define( 'LOGGED_IN_KEY',    'Z3eIuXcWLlR9jEnXuZdp2szmry1Gru2BzYhnMK60UOjHQlDD8G6RhM3L17h01KI2' );
define( 'NONCE_KEY',        'lh1FjMsEGVUFRSZTLd6AFRZrafDexTUHCEZaCFB9DixW2gKlwOlqZQfl9XTCybRg' );
define( 'AUTH_SALT',        'GwMD9AHmBwXdo7AQ4qXMkfpxTVgMDjNNGjGXrB98mLKbcbQ4WWB1HTrVgNw78C1u' );
define( 'SECURE_AUTH_SALT', 'a6VSyZjVKJz92c8i0g3rz0b3i02DyxmNpVcORhqA7G4H4arf6sst3ppWnnCKpXHe' );
define( 'LOGGED_IN_SALT',   'XWtPXSmzpv82mt1YJbFOhMQ7mKzi1NB3foLPelDgR0zV4MODDtNGwxftWhUhAwgf' );
define( 'NONCE_SALT',       'WM6bKDtvpe2tj6hp3wBoRE3jqaOqagPDzLxVY42FEMcAz1rJNz2KsQd0ZMVzRq03' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
