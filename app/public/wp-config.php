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
define('AUTH_KEY',         'QoPzgW9c69yG2tq9X2iXHwjInnCUV1M/r9IVpxtbCgwblDzwGrKbNdnT7bhpTeOQoQ3QyvQy6XUqNsoqvV1n3w==');
define('SECURE_AUTH_KEY',  '5QC4KfVc0sj2LcUUmO2S/nnyAxjQNfGHGL2cSiOatndG3rH2Jfo8tqyulgS5L4oX6bmIe+535EvqiOnDDWlFvQ==');
define('LOGGED_IN_KEY',    'MZMBB/kDApo4IyMQGl9aLEc1zmYZ8FDVobL9WFZYurL4wBp0U1ur8l41R/4n6U5nDnCk263Tiu9aHIUX5U7kEw==');
define('NONCE_KEY',        'umyeeTvGUrbN/ZwhD5eF5vHB/r02NGfsd7i+bfl0S2YQJ1R9F7dJyHOwspg1AUo7QP/eRa/w7Cc4KjI4KVXczg==');
define('AUTH_SALT',        '2opewh+NkbK8e3LHaCG+lRZdMdrP2WqdFkIAF6Z0atIr6Wr6Pj/NhPMmsiKvi1y885cyS+bcadv9CTbRzCRkEQ==');
define('SECURE_AUTH_SALT', '3I6hR24yBUTq/yHn5yPaB11NpqiVvBh+qaDJFBV0Tof+T5X52W2Px7dg4pw8cmE6A7rGpqU/6qZwOMONMFDezw==');
define('LOGGED_IN_SALT',   'fbZvT97Uwj3bEINMgjwrBv0cJTDcbQ2Qs8bjD18G9utKW70DHNhU1ooQ2+iRS7L5krzv5Mn0hOVveatpMkg68w==');
define('NONCE_SALT',       'oT1+aeIQthiCNyFDqpCcZrbY5lcxCQEDjWHhgeR5Fq1ebqx/450eztlF9Qel/7n0vDpPkC1mauQhX8Urjsol0g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
