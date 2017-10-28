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
define('DB_NAME', 'borobudurherbal_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'l}QCPiup&W`|m`t1)yJiABv`I88S&!5qF[udxbw.Z!|];wtkw4YU&tv{UjzxAy-;');
define('SECURE_AUTH_KEY',  '}o!Y@sPP!nR.e/2dcPq0o%T08^%V.vO]J@{bN|HIwi)SG$W`Cp2c%<wPmxMaVmCo');
define('LOGGED_IN_KEY',    'DF}W9GB,BG~f?`e yu7N+;t0M7BpUB~W_#07&j]0D7NF~I|37 e,S&kx]xYF]b+/');
define('NONCE_KEY',        '+cbaPqM68K >lr2+=/pS+*-QK%nsh%;E2UzFX&4`aX28CDuD5;G5j<C_,:2_sZah');
define('AUTH_SALT',        '**[p12k,QH*Ht/QaedFf8<cOPi$%=X9Ih3W+RTQOJvrQ<e.RE<som~K,*OxRj+G#');
define('SECURE_AUTH_SALT', 'Fd`#l<#po;i `!}~Zz=I|s(@|MWZ}SlrOC?)I~{J!y.LB}?fVP-/gk4#=P#|2i)G');
define('LOGGED_IN_SALT',   'u<HrpMgm_SO1e[GeaNUY/G6hLEjDxw6,M52^VHLjsQuC,nRU8XDbo`^[2.^Vl7Q[');
define('NONCE_SALT',       '+E{%uLxGbyTZfKqxd$^{fTNgD?=*!9m$FlI3gH8!aqJi.<$Pc~IM{y:IT}X9Yvww');

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
