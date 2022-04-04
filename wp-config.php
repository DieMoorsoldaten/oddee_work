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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oddee' );

/** MySQL database username */
define( 'DB_USER', 'Urmas84' );

/** MySQL database password */
define( 'DB_PASSWORD', '1937' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'b9_im~RL8Y/!#yJsy^R!P:-L@w}BP1Z;$nKpB|bFPN^FK.9Sl89{gHcgEB|I,(wE' );
define( 'SECURE_AUTH_KEY',  'yqR#IE<La!W Z}EA@u/ Qy>(!=4WP`(Qll[] yyT2=a5HBKS}z8G?!]jk,Iu_Mu^' );
define( 'LOGGED_IN_KEY',    'a([#ix(s%.XvW.&7~rn7/nkK9Oeue|6L<gmM@gIN*=4{@oub|1xrdJyMOMR1s~yx' );
define( 'NONCE_KEY',        '. a]vgea0enJE%rOd%Tq_Mt,I`<6ht$nZ`a,d^Q}M/07cfV$/p7zRfKCvm)B|B8q' );
define( 'AUTH_SALT',        'k@(uLZ5#nF+}0J}v*PZL?4pNWHLe#6Yc!Q/pOgS`C?1+8bwEZi<4gwEeo?CDP$V}' );
define( 'SECURE_AUTH_SALT', 'lyLp)]]TSWd^8W,g)o$pn5~~8oOj2W0|;x6)vI*TB`^9# 6-kfFbD)h4Y;H(5 5@' );
define( 'LOGGED_IN_SALT',   's(e&Zu)Ef>mne?-_<RrT1G4@zi~59D9z,N[mi0Yiac9#+e1p_5^_|(N;sT+ra]0>' );
define( 'NONCE_SALT',       'e?x_)J$IuWOs-LQoL%ee:3 $K-{K{u-tjujSC&$au.=>~$OhANHg.9B{C |F&-TY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'oa_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
