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
define('DB_NAME', 'clicksuredb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a#r*A>f18;w(C/|o69.,[u,{m`{^~s.`Ak2dkg,R~k` 8|U:p ]gB7lco{Yh=3sj');
define('SECURE_AUTH_KEY',  'NGY309-Rkg1F%x(V[YpbU(y*XZc$o!ttJiE]m03Sl.jqPwsN,{S7VEn=iIN=r_IC');
define('LOGGED_IN_KEY',    'b.d_BtEdug)JUuzL2DdQU-O!tEOFvdwuX1ygz4)%2?CW!6#Z5$5w?=<!(]?7<!2k');
define('NONCE_KEY',        ',bNoh}@ -Ee_6/bcjSbF&lJFY|VTrctrxwhDyXrwi~Eco~x+2^qi<+iChx_wH!}]');
define('AUTH_SALT',        'Q;:zjRdLi?{7~=5t^ziL[pa9B^3&1-,9X,5-`pU5Pzhx/_:EE2)Wx/.Swz(wVoS{');
define('SECURE_AUTH_SALT', 'q2X8ry*2c_N6/Dy`Cd:SsY$eO9 /0qZ]3_py}eg^m+MAw|XEi^08)O6kkp2>*TT ');
define('LOGGED_IN_SALT',   'y2^*&w[)bFhXi{nB2eQMGr>?%MIVNf0W;#+<b]xEY^D-e?Vl(mEjmV$&/c_[ofUB');
define('NONCE_SALT',       '/KIqa.~1F5[cID[C.zOVVhaG5!flQuesn-p1:1t<()h.Mi3d[6>`gYKUH]uN(_`<');

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
