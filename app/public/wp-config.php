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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );
12323434
/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'n]RC?T)H+cl^Bi* PJ3egcki-1R`{qQC65ZTLae[TOKT67qe1]5N[]r9oKKXKH78' );
define( 'SECURE_AUTH_KEY',   '#Ur9d8V9:C_4cy}?5IxP`V,ti.NyM/(js&GKzU7o[hM{&.8$oxUE_22`YaD8DoZC' );
define( 'LOGGED_IN_KEY',     'JF2BVHPlq`e$mqIPVd,R@F!tC#CGdBsz_eh)#r*7W&qAbYa~PWH|b5rra9|xy.s.' );
define( 'NONCE_KEY',         'wwANIUCcKN^GHooqec~e*7j1$U}uzo0cagzOv&}:Gxj/9foe&:sW8(n WB>Xwb4h' );
define( 'AUTH_SALT',         '[C;?9b8x^dSnu..3MK2<vu9Ce_h{PGxz97TsNj^mHs>~~}d7kmd|_=/09>1$Cbz7' );
define( 'SECURE_AUTH_SALT',  'O](=8?H53M|DR7vc3B_>0C.Q/.W-ms*b?F(]r]RK$~MG}SX:^x1aC@,wn-V`F_rg' );
define( 'LOGGED_IN_SALT',    'G[eQ=N|UVi=X$o~ul0@=C_l=GqZHGojDtqwK+g=</9d{j9l79}6N~~;DHkCWJ6E|' );
define( 'NONCE_SALT',        '<.9,,wZ[ddG6Sc<!7=75fg/pC8vzB)_t541v^ypf55:V%x4Kwxsf<*P@KjM(:EK}' );
define( 'WP_CACHE_KEY_SALT', '/iaZfM6}4l_K{9}r[1u|y8yz7{?T85=)G-}wUreRA;p0yD9DJcd3I:K7DG1NV>]:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
