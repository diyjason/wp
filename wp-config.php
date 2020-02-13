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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q_>OKw_g Bx?)V(^-[M-E@WmkD;~{,]inUnYWxYV73i2X?O+K%{nib%Lvwrb$7TW' );
define( 'SECURE_AUTH_KEY',  '9r`#&2aNmEMk$DeR8$7{/<&ds;L,LMCXl&#!RJ:xf},ZWjy+(^K2HhNlmdu6&S>V' );
define( 'LOGGED_IN_KEY',    'iiMFB)mVO:$(,UmI6)#)0 u{VCO(t5.|j*hITV{^14PeVCfH45-FXY1Vr*ue3R|U' );
define( 'NONCE_KEY',        '-*JBXNnz4vnLW4x4VDs(JFwbPD5-V $:mXh0sY,&5NA;<sQo4g-6<7sf>5Ol1H*{' );
define( 'AUTH_SALT',        'l*;#%|KUH9nt$:!X4JcY>e&}w3XNo{qQ<zi!%ZSehy2q*CUE|O<(p])+P+xf<%ZT' );
define( 'SECURE_AUTH_SALT', 'S*h%bX}oo$|]dq._XvRH?[m9wTyj-;bD8_7om=%:T-E0unp7>#:K*8t4S=>F}oXT' );
define( 'LOGGED_IN_SALT',   's}oI>Z}4=]oj[h4iPC$GjJ#nE[{80dtnxeB:MxTq1uiUhQL!)wVPc&o.-IIVZPN9' );
define( 'NONCE_SALT',       '~O1;;GUG)dmN]<udrz{p&?pmu*;gMXT({R4-)}xK0;5tT?``6P<?qu9bwB|t9_I9' );

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
