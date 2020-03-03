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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6A3EO8kYF695clakzLQieYq9Yo5Sdq6KTaUNHjsIrPRxvCUzblxUO8bcsF3Cgagb' );
define( 'SECURE_AUTH_KEY',  'd8hCmODGD6zzE36Qy0fzebp2dRcr0o2auve15MYAjGLlr9W83SLyuPDZz0Y9XOrd' );
define( 'LOGGED_IN_KEY',    'V3KCks9sRTwJkGJCdRUEb09U8qoSKwCsj3HZU7NL0wn9xWJYLwUypusNfBeB2lct' );
define( 'NONCE_KEY',        'jdJ05kbQf07ZW8w9MvKRmlODHYL5j8SGdgDjr5RB3dsvOzMt8RjZn7pqly8rcMtx' );
define( 'AUTH_SALT',        'gjQWYQp2BdKZpwvStuxKbg7LhZbG3maXyefW6XpCXlU0AYB9ltpZKgLpQiavJdGU' );
define( 'SECURE_AUTH_SALT', 'F3LJtqq0IsTjGYMlt05N4qCSbVxo7rNoFZIMg1EjVuEOb5HsIZzDUuLnM6SDRNk6' );
define( 'LOGGED_IN_SALT',   'BpoXwILArSiQG0toxLJX6oYVhx9tos9m2waVP5lW29UrcFIF18vyJuvGJ5WtEMT3' );
define( 'NONCE_SALT',       'SUNYW8nkKv1UaJKjzPscKYPpcEkVFHOjVpQJKtaS9HUmOEncCBAIAtOToNP2YJHU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
