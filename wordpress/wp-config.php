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
define( 'DB_NAME', 'kelascilsy_db' );

/** MySQL database username */
define( 'DB_USER', 'kelas' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'kteZSh|JnspGt,Bv 8yZ79,tFk`aXbBkSis,}odFX0b{l4S]l4*sgI1*b4gy-LSY' );
define( 'SECURE_AUTH_KEY',  'gNm3ZP3pI}nU@`;Vp?VT/#O)uLB2~.6* KJvWQ|$|Sr=p0~Vnf(cqJ-M</@g K<(' );
define( 'LOGGED_IN_KEY',    '.**6mODPgvZBgsKg;62,n L^0a*OMjJ=m,[_-=B/<TaZha~DM5_JmA%[3iQDK{+2' );
define( 'NONCE_KEY',        'VWA>=rV 4,zHw|_6{kY6X:|p=N:lQM!:F#h|?e^5C_Xsef<}qLUvDgdN2hwVVP{Z' );
define( 'AUTH_SALT',        'ZmWHm`XbTm;]NG5IDT8 TRV{;FJoU1=KA}<@EZp#>c7+B0SEsJYV;&;]LRvf{$Fc' );
define( 'SECURE_AUTH_SALT', '8bWN#TjH By}{%Pk&,l]X]j%?1]n*=HFRDu35x4k]]q0(=SLzUGo~(;Uc(dC4?=g' );
define( 'LOGGED_IN_SALT',   'axzfMs2qm{{^.CRr$21jF#pC6:.C:S]YZ08AxJ]U9k2$_gI,L@aao8G0nG8h;G.5' );
define( 'NONCE_SALT',       'xd??vk[L}_bJmjEav(vmiNAOD.GbAJ*^dY`Zr`/BaQgU6]!xZiL]H@a?;!z:jKi>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_kelas';

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
