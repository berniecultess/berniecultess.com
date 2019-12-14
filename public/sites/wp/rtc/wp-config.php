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
define( 'DB_NAME', 'rtc_test_db' );

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
define( 'AUTH_KEY',         'XayB9XCcj<kN]B:l?| =[5dS*vE/lm_E!ZOs|SalE0,B[/jl}u.ZkhSu2y_id8lA' );
define( 'SECURE_AUTH_KEY',  '8i0=ydhK>2cZV?Lu[NZTo+H)++]<(HfOU:HW^=GVKsZt)_1:~OD&q9LD-aSg<uEC' );
define( 'LOGGED_IN_KEY',    '+tx]blTN&}ysLP6yl4u8m.C>9|8e.C1XmU-&{sAD86Pe`M70T@P~o9>Q`Q40Y `r' );
define( 'NONCE_KEY',        'wq;2!bQd<Y A#vjuhl>tI+?SK2~be9[W~<Xh5&a hQ0WWM7d9SB^L_6V2&v-R$Dk' );
define( 'AUTH_SALT',        't2tP2t$32<>t2MeR}AM|0(N=9@0`~IY%a.N2dk1hCOt3jMr|tbbdWcuE&d-Ur9zI' );
define( 'SECURE_AUTH_SALT', 'M6TiofI/Va}hQRfgh#>3jU!5-~f4e+|OfKP +^jnE:JW5<&W41%]1L/?*2V93>+J' );
define( 'LOGGED_IN_SALT',   '8)NR[i>gOtp)&+}</,(XIx_R#&v-fA*D!UcB%s gwc27&/0Zk4eRe5dN)oq:#_5N' );
define( 'NONCE_SALT',       'DlR>P4+%G_(Elw CfX,f=h61:t(.6{*%6!BMCD-)k^$t@>)lV)Krd2#LgYPIPn?(' );

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
