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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+:1na>v~wHjU0}siZ8o4>/cmu*WUi={IN.rY@-N[WS+%s,9V}]9+^0> ^hma7;dg');
define('SECURE_AUTH_KEY',  'QFHbF+MA/p9J.#h<C,7qv;u|r?=6i&D~-PUItLF(L`Awm;y;pLq`h]2z-mN t[,6');
define('LOGGED_IN_KEY',    'rvG$vB]jii$gLY7*I)8c@+1X|X3U7Uq4 ?-k7+w9<XAdO6Fdj;OaIT~VK?YQChF#');
define('NONCE_KEY',        ' :;@Z,c8h&gt*XD*Ud ?$8O*=2ex1Y|s9byVC5|?pv7n yCAq-D&? V~Hvc#h+y/');
define('AUTH_SALT',        '%]:i<#FXc)v#9.He@Vz8=e&LqkDfG^|(9Ye>$B&N51Z%cCi)]K7R|#aWm N3O#?m');
define('SECURE_AUTH_SALT', '3w{7gaBY?vQi#:OO,OMWh48e&KD>e1uP9KhI.u0~l{wR imcV@5+J/;y)>V+BTB+');
define('LOGGED_IN_SALT',   '-[mAt|.9H<|&Q+Wig9tZB4oEWId&Qy|pz0D1=~UF5B/@s#0|Noh^)B1|T8+;54|7');
define('NONCE_SALT',       '$JUIzxl{-DeCzg|$z88cVb0OS8SGpuR9=AjsB+D+x&V&W]6+TGG72W(_6TY5E-2-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
