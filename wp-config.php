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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6. */

define('AUTH_KEY',         'P@bH?P>6C#/k9$(ho^w+NdUaUv82(_*wgfi[{$2|5I-%mUjhC<C(a+|Pf+8q09u[');
define('SECURE_AUTH_KEY',  '|OpnDHC1_daCf9]>:z4m%LD&|Sotk-M+l ZGf+^X<Kn]^w+@9aO3@w<-6pPG@X8&');
define('LOGGED_IN_KEY',    'nv^O%w`2bDM+R}U60g?,O}PFws/`Rpv8|TqH*y2ftxjgX|+XF|y>3XhLPA5Hk)+W');
define('NONCE_KEY',        '^YiR]y}t]=G~5PQv4 _ndRcQ=b?M}/fK[1XR:$w%8]yVXo27[?8Hop;zQ;~B*wv[');
define('AUTH_SALT',        '`E:.SI,A4$Gcm>nd4[S)w$W#V)_+D[RK{#Y;;,-u<z(P-wPf-RW4-B-FnD/3XVd)');
define('SECURE_AUTH_SALT', '](eK9Cl]9s7FmJU],FkMX9[FM@(,t~+fe*;|*.`iS$[R$RbN4pp&D{[&wWN;,@o>');
define('LOGGED_IN_SALT',   'i?|~f0V?)bU<&dfl>Z<iEGd+c*4NGR?~5%0ut`+k:VZVWff[XM9NJF,/G&xG7rH|');
define('NONCE_SALT',       '1 9ip|@).j(M51w5JHGx&l+,;g-C}3^tCY.A*I,~BYYep,-#l>x2f*o4b|$.tCK3');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define('FS_METHOD', 'direct');
