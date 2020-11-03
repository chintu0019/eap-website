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
define( 'DB_NAME', 'explo6kl_wp155' );

/** MySQL database username */
define( 'DB_USER', 'explo6kl_wp155' );

/** MySQL database password */
define( 'DB_PASSWORD', '9))S20dp82' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fw5qpsliwxzn0hipzl93o6u8ah8mjr0ehooq8c6ng294lbdk96ok8amojjpsw3gd' );
define( 'SECURE_AUTH_KEY',  'gk9irusl00whhka3utiqjt5xd5i2rcolylqr1wfrqbbdkxik3bwxsoaorqxvjpzb' );
define( 'LOGGED_IN_KEY',    'vrgvq2hxji0xrigcr81mrojlkniwxypkecq2pr81lqkvsmqp2p5pug9tdxhzy8rg' );
define( 'NONCE_KEY',        'rx61ow9knyj3cza6x07x6mnpehbqwjyptccoigr0bt9g3mcus8ivsuavvxvlyvzp' );
define( 'AUTH_SALT',        'hgtefrcw0vmqz8kebeih45saoyl0irvqpepxsxs0ftotttxr8ionzsadaytwmc6f' );
define( 'SECURE_AUTH_SALT', 'qp0vrs8fchp1196ggekrc6er7x0dolgftnqdtjcyhbyojjjmlvcm6mhbhzp3v2iu' );
define( 'LOGGED_IN_SALT',   'l97ujvem2rsia8wr2ecynls0l1bj8dz1ilcyoxdz5ofvudhl5n0boz9ua71puufv' );
define( 'NONCE_SALT',       'vdsnkeo3xd9tyb79zpcgf65iaj7thmckw2tlc182qqfasn7pkfpskluipnkgubue' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvb_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
