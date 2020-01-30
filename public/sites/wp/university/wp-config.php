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
define( 'DB_NAME', 'university_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[P%LU5KB@wNwOl Gl/IXch$UyOF%:)p3f7oe||-DD?!gLHW9pXtl^66kxF_Jqekx' );
define( 'SECURE_AUTH_KEY',  'L^ `(A;ylNGJsIV{Vu&~%CQGKx+$} +HrDW-Oo>,cR?PMDlDe+*1No<)iweJ{8O!' );
define( 'LOGGED_IN_KEY',    ':=luXTb)n*S?&yatY#,/3*_M7hmeEum6QBJDs%$AmbpJR:TuK(PQ|lxq e4]zo|A' );
define( 'NONCE_KEY',        '$(r(>ULIN0WSM-XeliR@h4=]T-{q5#a]y|~i0?v!z^d^CcDmxG{(k}ao%#-f|ox1' );
define( 'AUTH_SALT',        'LKPkyjy_N,crTyhDE^Fe?8IC;@+3?3iebUmie(s&E@ndU^,s49{+M)WuQ;QAW2T ' );
define( 'SECURE_AUTH_SALT', '0V0Zt*pmQG$bULyEZBgj .-[7L2~:6y#J1L~:^V4XLYQ|?RTi~$^IQA3w~1g0Td=' );
define( 'LOGGED_IN_SALT',   '|;o$-u;^w1vu,}Z4uUF r2?aucNHf$_2oR0LwNF,ZkbE|Ruj972=Gx^gSwf=&Zr=' );
define( 'NONCE_SALT',       'QLt<.?*q$o34uVb.Ki]f|wOjL$qdB6{]#l#8nx^)[O(F{^?;K4SA@&F}LXg$+&ef' );

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
