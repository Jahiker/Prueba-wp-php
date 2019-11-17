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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mh(O@yd#O/cP+#0a{LUv?5y|Nl8cq*)J8yzJO+o~DVH[.:9r)ktJsyfQWXoxx|U3' );
define( 'SECURE_AUTH_KEY',  '_gORE74Re-C|W}?$+EiGi?]W!&D[E>Ja+XV h24tRrHzkcY{i:z!N2l?wM%]smnT' );
define( 'LOGGED_IN_KEY',    '.R6Au44GM!9+|?[q%HD,^F>&^>2P7@ulsD8W0@2oJBG0>q-u_BHA5PFF6Vi&DlHv' );
define( 'NONCE_KEY',        'UZbY2t>66aG*3Tk2<CBF]$eM5swn.dDnU#.:XxCSo+c;8PhCI#3H|9T5:m{y5NzJ' );
define( 'AUTH_SALT',        'Zi1~-!WaX[}U/lEo3-Ql}?(?9aT8&-TLUfmd:QF5pos2+eVsHX5qu@7oOJy{}g_d' );
define( 'SECURE_AUTH_SALT', '<EW+CNcwo:NN`W:/.mr)},ra7Deoy.l3Ok1Z1DA;F1=i!td^Mc?HA[5*ImB+Qbwu' );
define( 'LOGGED_IN_SALT',   'O~;OAsg@GlO_CaD5L,p{7$=a|:guk;0R74EHL0Iye<,#K7gnjq08}ES4v:K-;hPp' );
define( 'NONCE_SALT',       'ueQn3t!xbIocH3Ihj^pY{~O`Y}/6<_oN8Z_C3#+EX1%IQlD7kDb`hFcsCxXYT#=H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjr_';

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
