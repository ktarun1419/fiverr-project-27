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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quokodhy_wp178' );

/** Database username */
define( 'DB_USER', 'quokodhy_wp178' );

/** Database password */
define( 'DB_PASSWORD', 'Sp@O02N76[2.[WE]' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'ypmdznxjtewbnmwzsqoqrq1lqjpqzdegphuouit1r0i75ry8ewcnyg56vwcvh7dm' );
define( 'SECURE_AUTH_KEY',  'w5znpe5pqiovzzczyhtwacdvygbzlk9nw3u2ai0k1i7hta1t1kqnfqaghfvk8ovj' );
define( 'LOGGED_IN_KEY',    '067a5knfg0gzsgoyibm57yq82miflkgiggrald3ig0z2hbtpvdzzjvzqhptjlnhk' );
define( 'NONCE_KEY',        'fbbxnnc1uxtn6pxlptkdlsqjsmn1bix3mwv9esnva6dhwx7dd1g00z6yqqxuwo0c' );
define( 'AUTH_SALT',        'qz5b4lxy0ob4hqkvtgawbnzvoqxcqrbkdfnw778ipdriwm5vj8jyoj2sqnsyr9ck' );
define( 'SECURE_AUTH_SALT', 'ipc0yzkck32qu8ii6a2a7p5gwuzkleglgloe1ar1hu1isbvv80oy7mtffhj6klrv' );
define( 'LOGGED_IN_SALT',   'bddff70rz0hycj0ur1o0eqyq3twxrgx1avsjdvnz4baqp4igunt43df31yhdpqqj' );
define( 'NONCE_SALT',       'qtldpmj1a0tpz7tqcutkxri2kmhxh6ngbszirws2xkiqlx4hlgajn6nbiytjwzcb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpzh_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
