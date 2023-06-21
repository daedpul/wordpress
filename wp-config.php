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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hcsolution' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'auu(w43>?e-([]*1FT+<xCfWRHzT<([uXK,]K<}OLFsk2B.^hw/XF`7H[b9rI$w%' );
define( 'SECURE_AUTH_KEY',  'hP!&oe?O hcG}maut{//KERJ15OL(!c]$1+>X8{6Q?rf(q9zF} |{N7A.k9 G8&R' );
define( 'LOGGED_IN_KEY',    'RP:,`O yNd?n[^RLuB`(ol!Sge]vWM?o>Gkt..@p.4+(l;C$!|fFYGA7U[3) UJf' );
define( 'NONCE_KEY',        'hLgw_rvqq {Y!H0`0z[B7S9pS2~E.Wsjry:~ By.TD@Gy1*HKL~uw 9?ey?=x#xL' );
define( 'AUTH_SALT',        '=s?]+`DfH3Sn%KuY,HL#E18/@Ettl)j+lGLGH<V,B8~5PdFr[fh}nDgd@I)>|RB0' );
define( 'SECURE_AUTH_SALT', '-cM>:=dR}MS8Mth,b^mq54r)s@^mUc;<DbaYS_X~WdMgV:h>W3@IPlK=$iwpxQ.K' );
define( 'LOGGED_IN_SALT',   'dGqkT;b34EzMNhht{z}ZM0a5g)0,KiNo]-/RyBEUrt]k<yGM^x`[&ii,6:}h]+s=' );
define( 'NONCE_SALT',       'q,$Ba` {u.Vc.(b.C*G3XSWfgTLX_jcB[CcOx5SSLr_iu{$EV@(>[pq3[.h]ySU@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
