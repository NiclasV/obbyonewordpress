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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '>cCSA%y3P,%>?W~)liJSSnDE|1o=u1SED91jjo`>.Hu[:`GdH,A(>ph{h$@(,oUL');
define('SECURE_AUTH_KEY',  '=x,[-AbSXGk@BFFm?NaB9Wj,!wSqpajW x4p;Y#s@pzRxagZLTHy.4=-g.U7s|^6');
define('LOGGED_IN_KEY',    'vP62LrW[b4=l+|kg! OJS oHTu6D+`Kh7#X;7g1H~+a&UDkUvGF-P!v}:dTXO%r!');
define('NONCE_KEY',        '@mq~f39r0OU_R7b 8xLXH_/r+PEyMZo|#gby`t@B89ot9lkk#SS{GZFiLp}H%i?G');
define('AUTH_SALT',        'Rp}56RCd=F+2xS|5kCBI1mQY}=A-Bx.6_Sae]l3_h_UV3fbC@*!`u_kcIM8kcVb2');
define('SECURE_AUTH_SALT', ')jNEcSo9AfTJAndRc^e>Kn[pyvIj&8RVdL/k`4x7I3 M]MY/Y]qfQ4nhNEbvWsi0');
define('LOGGED_IN_SALT',   '5X54u>R}HvhQ%G{2X(l-QzY&z0jw!;r8EPs6yt)#|t:WCi! _rS&gJxj^:Z{$*ml');
define('NONCE_SALT',       '4s6q|K C|[S&uShtB*/KjiP@,aXQ[lVr~D@M2Un<!bcx,BM$0::AZ-FZf/zF4*Jk');

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
