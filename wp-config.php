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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

use Dotenv\Dotenv;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'WIQ38uO:t-+`rcGFL$[N,+%yUV5Cf(?N$Mv(A-G#D?+i>AL7IGG fLhHPJ)lF:-O' );
define( 'SECURE_AUTH_KEY',   'n{P_Rx^yF6~`g+zj8i6@=&{.dmXRt?EY%u!C|BW;j<jL>/&;TosfqFTGSHx)av6)' );
define( 'LOGGED_IN_KEY',     'YFwaA_i*!zGpuA@w ?TS7iw!a59j=9=n|uWf~9 x-s%X$+w%cs.pi 4*KD?2xR0h' );
define( 'NONCE_KEY',         'A2!RD&M@LGiNaEF39FITN.P_3TwUa/YWcIJppAaA%7,j[I3)l/5!2QF+U>&IIe.z' );
define( 'AUTH_SALT',         '/LOU>W>AS0j1*L$JHIsA6vTqoy3P,JBKmPVMMlWc.MIop!V<=<Jo#%w1N]QC{}Pl' );
define( 'SECURE_AUTH_SALT',  ':!)x~=Lh~-Kv1q1^QL|2t0Xm`;S$&,[+hd#J?HV;DWY{_ZX)#)IZ$xe9qI{%!LjT' );
define( 'LOGGED_IN_SALT',    '~/NDHLCh9X`u`s- XttpTp:VsB>Y%_4[Qdd4.r)2O#C$mh<+@gl&-f`._B;`nBe^' );
define( 'NONCE_SALT',        'gmTGc`QmRy1/+XaoPe.kB#D]B4(L@d?^%B~ J^FO~gx7_wz[>*:n))MVN|5P7DCO' );
define( 'WP_CACHE_KEY_SALT', 'u7 XJ/f <}h1LD+U~rs{t?eX)YEjTtXm1$%Dj#?3?K#Kjbh}Zd1j.CRp*f/.ln+&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
