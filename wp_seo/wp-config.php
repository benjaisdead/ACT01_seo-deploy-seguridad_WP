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
define('DB_NAME', 'wp_seo');

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
define('AUTH_KEY',         'w+*scWgM7{d6C8pRlH;_egvEjU(1M{5qV4IvKE,!*}?Mt#zN+!ej, ^e-&qF{Iqw');
define('SECURE_AUTH_KEY',  'SJ c61>N<k/<[V F{Bgz/~hLVCafV`Dm~`1[%aw)Hdtv]FL!zC*0?k]` CYDE6B7');
define('LOGGED_IN_KEY',    'dA&.V(Ws]`F+$~YE>S>rq*A/0L -!IAI3b~LtEO_EMW5g&O>+-[8LUYr}EDSYwyB');
define('NONCE_KEY',        '`!,IYqY{b#W4~0]}>?w7hdB#C)!|:&,=TYLDF1FN;>1HpmtFr?Sl05Nj{7-Bvt_8');
define('AUTH_SALT',        '6sLLd-cz7#W* HQ5r)@C0:0*4LLEN#WEC[1{Mle>eKtYT2OaH~B-ar@~Ga)EqlmY');
define('SECURE_AUTH_SALT', '=WrJ7bXYTAeCc=c)H*4cAU%XIO4BB^u<O7$:t@qLg[|A^ sO3-l%Y`m$4QFqdaf*');
define('LOGGED_IN_SALT',   '$<ii3}f/[#A:j66RJ`U=8h.;2`388MZC7Aaau5dk_v=PX_4~$vv{|?bqnKcCy[DE');
define('NONCE_SALT',       'nI(a%2:97vr&PZKm0&%D(f2./xMp5H=l87q(hS4Zzzhs;Mg]:n9^[%@{V$K@Nf_g');

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
