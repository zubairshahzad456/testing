<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'xjn$R=<0T76#uq4jYM*^QvMWE-Tu~4!L3:A3o>9(f3`(zIs_Zz(HaGap&h@Ul5S}' );
define( 'SECURE_AUTH_KEY',  '_@`.t-]^{`r[wnJrt]c`G}4$cutMGMkITc>KyF1];[ZCUK$c Me.7}U=qLMOW/*-' );
define( 'LOGGED_IN_KEY',    '0L`qapMc+Y3)Alia>NQS6T[`9g(lgI;A|D9Xs3T3i{v65Gpo|d`S4nn|M;lJYH>p' );
define( 'NONCE_KEY',        'H.cy_Q+-ke42G&[3|G]+r78}J2+2qLx,;lbe%(3=fuT*{lEcv7yJki^<[odGjc]Y' );
define( 'AUTH_SALT',        '2D|-Y~.2zs}V(AyU(T-oDaET^0}8U#]b`x5rIJ6ifZ.xl/,?P7%RFXC3CCA|kL~^' );
define( 'SECURE_AUTH_SALT', '9#I6|l5w%}%vwM7O[c2o<;AY&C94}2WO7Zgpk`N-BapIx;N~e[1:lf.;kq}4pt5)' );
define( 'LOGGED_IN_SALT',   '(?tFK8pZh*6]`d/s(+E3+rI.w])C+P?O!1I*8S)kd9Q],O_}q7Yw7n}pcD%*Us<J' );
define( 'NONCE_SALT',       '}%_aN8;o-TfG)B)e .TEWZ`jJ&{?pLha/aK8Kewc1^gg{xoTm`6DXz#7k{jbMh$=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
