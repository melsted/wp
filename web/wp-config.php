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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FMoyF$wZ|!&o2,Mdzie.IMtNL#h}pRfWh+$7ve!,}C #svf}:cl<dhs{cH2]=(LN' );
define( 'SECURE_AUTH_KEY',  'Y{|}tK=dRf{gZpn}=dZw-JIrwY5A8$rsgn(<aM:)v]-ly$hrc#=C?$P<x/xouF})' );
define( 'LOGGED_IN_KEY',    '@c7@Fm(bS+M*S_-1gS=QT>EmYl`#DUq(Ds#MFtcz$3#m?z`FPQD8gc@QcoSbu.CF' );
define( 'NONCE_KEY',        '!.xfK11883CY*8$]-*6B1PJ56TR6TSr FOl+h}Qa:WEqz*2j-=6;zYmhc)|0S%+F' );
define( 'AUTH_SALT',        'z,?~pDh(}#V287d5XEAMJ82LrZ}9mG=o{r<786/5cQQLmlx+;|r??5@-H?SQ&h.`' );
define( 'SECURE_AUTH_SALT', 'iXt1eaoxMy#zlB<:(Yt {P%t&d]/S<|jO.DyqA{(O:=?[$g)UL}2LG]8 cV}U<s=' );
define( 'LOGGED_IN_SALT',   'n}I&Q5kv%agjImNT#cQ)@luH>1|9P]j53t?Nr~Bh2}s#PnUSNJ=!@vu352[l)_p#' );
define( 'NONCE_SALT',       'ut}#kXhU}5WVFA8dS(I*xl.2~62.#rN[//Ket-iT:Spu8tso+ 1%s*r9XC%TXLOz' );

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
