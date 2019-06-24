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
define( 'DB_NAME', 'swasthyadainik' );

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
define( 'AUTH_KEY',         'cg@+&N2?x6=ZhZXbvee,5dXVIaB60aNSif1*NEY6JWzaX?g+}d%,<ZL3CGur.aCP' );
define( 'SECURE_AUTH_KEY',  'yes,E1C35FTLeaQy`gzy2t@(d=LTj5{Zc6%T3O7H.cEZQQPITX-Z4y!&D%)X-+M7' );
define( 'LOGGED_IN_KEY',    'RGT!$mI#+B4Pi@lnTjXqb{7U4zpG,bw{aLSNL#83(O7s`d:}u3DCSbM3Xo#>v(,v' );
define( 'NONCE_KEY',        'C&*4F5ruBupd=$^f@+sD0,wboXo%&U<^Qo8]c5GMqY^Onpo:,isr8=V/ZGSqti.D' );
define( 'AUTH_SALT',        'Qv&pKd-YM<_Ua>LlJG86 #d:b$ltbhwbf}>&T`9kkF,(;cx(np?`JJ5]!n9#.po8' );
define( 'SECURE_AUTH_SALT', '`?YN)>LRQ?Y&yD5as+x;`3JVVvPd.tk=pJ8vZd}N-?Mh*^q|p.xU>a:.sn)7<Ox^' );
define( 'LOGGED_IN_SALT',   'N{BIGHuvt$CM`JY@r`EIR*93q*+@1oEkN^Pm5QYm/Xedwm.y;Rcp3k>_Hu]V,4Z!' );
define( 'NONCE_SALT',       'kb`Taoe<>KKXd~Cs_iSl_,xFdXq.or~G$M@.[F$Qm+O%q%[X^QZo,eHUOoHP+Hh9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sd_';

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
