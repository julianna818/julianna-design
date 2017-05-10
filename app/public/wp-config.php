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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'c6WTwcowOHFTDgRmZcJ0T4pin9RJ7owzxVMeePChXW+D2vsHUBeLe+1sztuwEu02QkB1DN4AGxFu3j6oVpmZdQ==');
define('SECURE_AUTH_KEY',  'A3QYUSbsXdO8R+c+KWmajL7o8lLbmm3Cwe0dTfSzrm0ETs1B3YhofNi3DtMgm70eJj+KmagGwYUlz5bd0gYhwg==');
define('LOGGED_IN_KEY',    'g9gXeTShjwSd2NG5riIiaxDgnB0IHPVHUj/k+EjFyEAGhHZ1AdTehnKjw4fEix6ElstvFxgWLT0WvyiImlLOSA==');
define('NONCE_KEY',        'HjYzecdTtF0zgZSCiRraphTgt5iJA+5kFCVm0ifG3Y1sR3g9ent/opjvkBofjSXYdADL1nebj99VibEDYG9mHg==');
define('AUTH_SALT',        'PdfydUQW874UBUxvBoKDkFXlKGO5TBtcBudTY3hCPepekSdgzuVMVjpLA2VcgauGLiByOax3oHJRAfoMJiqkPg==');
define('SECURE_AUTH_SALT', 'D3RW8Yd/pb1wifj/c09vo/WAmoPNtqz1mAbnHXA8WIhOekvx9j7RG6BYdbWca10Jhlpo7irKIVLN9wTSx570rA==');
define('LOGGED_IN_SALT',   'SqhN2P36Dh3iHW/Iv0KyCOW+PNbxrWs2wk4MTK4pdnpYWGBN4j6se9TZGttJKT1lI18AdaGARi1lcgufFR+aYQ==');
define('NONCE_SALT',       'zPbb/MD7yZxFY8oqJOjgfd39pnu47WQnUz1Rn3aGwYvSlDG9iuylSTQLjJN4oRzrj4dg8mRrqvkuQJBF4KGVWA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
