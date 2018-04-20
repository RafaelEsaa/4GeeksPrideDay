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
define( 'DB_NAME', 'c9' );

/** MySQL database username */
define( 'DB_USER', 'rafaelesaa' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mr5tijeuovPnH85TJmH{yyq|C+wNuv0N8axE6g;]}Q_Uf1oG4POA%k~op#tgZTo.' );
define( 'SECURE_AUTH_KEY',  'CWaz%o0h<uhsK<??SXrW*!jPW(%_mP9@Y1f<; k9Kv6_]i[QsSi<L%[A)6cP*q^T' );
define( 'LOGGED_IN_KEY',    ';:B8nFJ!QW|tV*0Juo q >`F`j+Kw/t!*9?( YU%6rFX/Jd@&Oc+]iq|`P5,{g+X' );
define( 'NONCE_KEY',        '{vFXUO,v$Nyr%yN]E@])_xNCZpd}yT;&yXG(r+8lf3foN=`.FO?SiFdnVq^Df6&9' );
define( 'AUTH_SALT',        'aJ{DvX=-Usk^,RO2ukLoS/}.T[|g*MesZ1,;U|8bM~CrvAfNA,`gw IQ 4YZi&Q2' );
define( 'SECURE_AUTH_SALT', 'pzfE`4}jdxO0/OFg/NpPmjuE;vM/44r:9o2Si+1R2@KhMVJjr ;T%T.YKHJqN,6Q' );
define( 'LOGGED_IN_SALT',   '{T~L-XmjeH&o|F&ZEzF]9}>slBOHxrgfdZwzOj+7#q)P)FvuHxKN5f?v}GN7V3Ly' );
define( 'NONCE_SALT',       '5s.(VJ_l(T!:V||=N2:[$]IE7D`& |%:d8!?,Ip#$d6ZWo=9i4^!/Qkhw_VN9nj_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('BREATHECODE_API_HOST', 'https://talenttree-alesanchezr.c9users.io/');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('UGLIFY_HTML', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

