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
define('AUTH_KEY',         'X9(x~(fQY23+DSbJiE8|Gf48`sIiEfu2bmr0TBQ`q:vLvO|#hRaUk0fEelM~-YBR');
define('SECURE_AUTH_KEY',  'z&Jj0rxM0Mj&:gV3x-jeU/E*eB=v6<T3{9N@JDb|W> 10@dT[vg3[{;#EC[*ANJ6');
define('LOGGED_IN_KEY',    '?e^yk[bM%%g(:h:-cqbbx@g$g,z[~Xx%0s-;6,)[{Z&ucw,xLTFImjv Dq.3/|tQ');
define('NONCE_KEY',        '_Il;F{Cb$Wz4^3pY/r%Tpf$IKVS>~(r}8t;U!/s!b0bVkhYEYQNRZ*NMFp|&`qAG');
define('AUTH_SALT',        ',!rQDooqBV{xoc=>,cej6Tfl*qXe3:KPXThN=eWKQ%UbFB&>3C60K{BJd|YLtN)k');
define('SECURE_AUTH_SALT', 'OTu=IgS(1Bm{l<4u(ZwP?5}=R G%)baKM7~2o7F{^vI?b:)@iD`7=wSqX:Vq}rB^');
define('LOGGED_IN_SALT',   'ki)O&`3%.AkBfQjLSV%o-rZ<U*O}-?~8BbE;8^b/@lKSc.,nZ`+5|UAD_ 1#ooa`');
define('NONCE_SALT',       'AVvC5Pl{/}b_:BC9;o5^)`Q5486?EwpzoP8V_tc{8EP5Ye_LO^ }N)Iby~%*_%&4');

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
