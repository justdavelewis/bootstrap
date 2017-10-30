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
define('DB_NAME', 'bootstrap_to_wp');

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
define('AUTH_KEY',         'YWi];[Bx*rcteYC3U(5VjRhO|3w/&/C_+N+,QI#i&)I|4CTP<=odk)z**CJ d)ax');
define('SECURE_AUTH_KEY',  '`SYP2MyU->!7if:X;f@|Q:<oZ*Y[K_ f3:d[9uj(VuVluZ$!f6_o,EHG]bhULLUO');
define('LOGGED_IN_KEY',    'OZH2T-c8*+56qScdX#ACV2gM0W6BSaK*DpWc?p&FgXU4|<hfw]l*kKu}bq*pb3#4');
define('NONCE_KEY',        '73Kh2?6fdUkJraH%C279;M-J1]5(y/{4wV_=k=2<fmEE}s&QkB(1z%(ZWBVEEYmm');
define('AUTH_SALT',        'Fxh$`*GwLi1-<6WL[tBY<=w@0oO8-``.Gu>91(->t[/PwMc&?@bP(>-ycZCF8fZl');
define('SECURE_AUTH_SALT', 'lSD0R)Fm%b-=*modHn7cr59<vhWWbp]vR!k;#Q2~f*uet>Vac*:i@zN6u@txwGY|');
define('LOGGED_IN_SALT',   'Z~Bre%4Ce-yc^b^M;V-Vu{{W: 4ygr*[gqCNLjG#:c?W2m6NY&26%d`C%=/4e>#/');
define('NONCE_SALT',       'FNj$w4|&?oWv[Z60@%I^/8;*3.=4k(Q_dlCK6N|o-[ ?I1N)UtKGUy9Geyc$MkwP');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
