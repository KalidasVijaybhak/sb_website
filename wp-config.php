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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'DNugFS?57k!S(^$f:-0sDOE9Ins0$kFT`FvySu|ssr0/hXUW=l_JSi076ZA+nZLo' );
define( 'SECURE_AUTH_KEY',  'phwb2:VlQf59w!#A.trE r8{n^D2e+$5BM~t^4z4iDk?WAn$0RKdn]r)SBiIt-QP' );
define( 'LOGGED_IN_KEY',    'e(2s^kisKU^1OEVeMF# 7$vcai0k97^G@SLG33[pr (B.+&S]|fg|$sv`u2]0Epu' );
define( 'NONCE_KEY',        'f0*.nXwNS|jT|K%z7X/,0Z+:$)o5A8A:)s~brQ:HX1UX8 Q2j$N)x<.61<_d!<36' );
define( 'AUTH_SALT',        '). Ut _]#.I%rS<95_+{e7]&}vvQuy$BZPH*g3o8Qn@qzo;ek.UUnjGh[Bm;}~@>' );
define( 'SECURE_AUTH_SALT', 'f4D7[8xM70{t`vceZb!tZ.N7MO1&g^p*Z%z.:O+?0Rl{4uE_HYM$b}H?f3q7-BcR' );
define( 'LOGGED_IN_SALT',   'T8niUT]M6ZxA40F>h=o@!y^cb2$kG!)?zBu`1TX,9NI1L$viiG2-JEKaaUWM%xpm' );
define( 'NONCE_SALT',       '~vkx+N`/{F+(xbVQu)`t$We+p9]|w!Phj]XsSl1[zlFUbN`/LeS;OJubMP?LYf1K' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
