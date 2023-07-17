<?php
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
define( 'DB_NAME', 'theme-plugin-dev' );

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
define( 'AUTH_KEY',         'vGip8TaiTieQMiqcX5xRQn3RtMHIv9R0LC9N5BzsW8CT0PMOyHrLoH0hYhRXOzrQ' );
define( 'SECURE_AUTH_KEY',  'hrZQ1mfu05DAOAlXIWKya639RDijVpnZb2FM9yrpyJNzvv6w6mhzvCV0QvvV3RhE' );
define( 'LOGGED_IN_KEY',    'CXhfWWCsr1qFTAFdoMu34wx06V7lABjLggc5SF81qIPNWBnMzZo5Ewv4qBabQQLs' );
define( 'NONCE_KEY',        'sPJzSZpl664yOjAfCs6EZ2RKtGhzqNOQh7BA6rckXBnkMloUY0LDqzCiVRdsus1q' );
define( 'AUTH_SALT',        'uFekbVgt4731lkU1zz2tOKJuQg9gYdjhMQebEQqnvD4h8FEK1q34ENSFTIZsfoya' );
define( 'SECURE_AUTH_SALT', 'X9w56VVyMjwNGquwOnHtFIPdzKV5SsaR5nI1Lpm87G2fiHbg0An7E7LZjCrwCswH' );
define( 'LOGGED_IN_SALT',   'DocjMru8R8KLo4Iod3f4zN4WscbVW9GxfjCrDyEIHdDco5QCRGhv3WsNqye8NAcC' );
define( 'NONCE_SALT',       'DXifsrtMuuUGPRhw8LklVC0d12fAyPSry7z3s6SvjksSE7hbXhEDxo401OcCPWJQ' );

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
