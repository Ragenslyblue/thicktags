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
define( 'DB_NAME', 'thicktags' );

/** MySQL database username */
define( 'DB_USER', 'raffa' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nemugasa' );

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
define( 'AUTH_KEY',         'gpo`/sg0V6GV1VZxdC;)!n-#omftiRZn!qhC-Qf9@UY+nh(d%AgH+6C]Ex(|blu3' );
define( 'SECURE_AUTH_KEY',  'bGD176rpT]4Y%y,ub25vi_aTj_3Lr?<suB}O]Y=Uhxu%ONkUglrA3g?WaQ6&$*/P' );
define( 'LOGGED_IN_KEY',    'RT*9@!?jlkSY}(MDJbcf6OmPnYVSM@&%@BX.n!)SW)N`nW{]9vkdvCW!AvXP$5>Q' );
define( 'NONCE_KEY',        'F EdW=Cdp%]SD82ok!?s1@cI`jM ?CKwoIMLBA:I6%>b/_W]1x&*d`B5Iwq!xHOu' );
define( 'AUTH_SALT',        'x,OupBm35m@{Ip8Ur?a54s A=^!J$ya1^4TH2VO%$FbE|P42AVFQsU@AKqZ2uc2p' );
define( 'SECURE_AUTH_SALT', '}}Y7~z7M96r`$T(z<5E)=?#>5K79:peTOREr^=|&Cr;ALk.n sD(Mz l/.n{sqMQ' );
define( 'LOGGED_IN_SALT',   'Use,o=K0HF2;(.I^Pq&lS)_iY.tiUj0FN^vJ*B&aDtMr,*BO, 7rgOZ9!)XJ`Wn8' );
define( 'NONCE_SALT',       'fnk]TZ!Ipj~z$G/36.BO~p*T;2>Z9<]>MmTTam0BG=B08i=UVO5+CQf^!,`s%qHM' );

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
