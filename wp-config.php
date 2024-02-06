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
define( 'DB_NAME', 'communitywebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8080' );

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
define( 'AUTH_KEY',         'N@<rk+9CM~)R+m&6@Ss26!7f{Pe4T?]U<yD0ZVCC+beqJb^w6y+jP;16Z6/SOd,,' );
define( 'SECURE_AUTH_KEY',  'tU.nJe{I[SyFV]]%bPUBoiKI275ckLF<LcmJuZ,X/1$7i;nPShWe-r3ZlkBr]U(t' );
define( 'LOGGED_IN_KEY',    '`fyS#VX];)$^qXxhg3@7M(4rRFE3MPVVr,tn+ix$)5sq4+7J3hOn8OS@6T!/sWGl' );
define( 'NONCE_KEY',        '@XTcXLT->!p-[G%]7,o7j8BG; p|7$5VS@~C^os%~4ku|; c~drcEEPs *9tcs7m' );
define( 'AUTH_SALT',        ']fu%cr-ij&[K5Y$>*kxU:gP|zM&Br,[lkEpeE(fS8WZgZZ7L.kS2?|}=B5`U@R1Y' );
define( 'SECURE_AUTH_SALT', '9;5EF^7/:o0[X[FZHBet.]QlfHo#`Y_Sc=4;b/bi!{H3<p%r s!lRNze 8&P,pGg' );
define( 'LOGGED_IN_SALT',   '^H5nLSM ;-2&^V^=m)]x TX*RK-xY0lZ`,F4.#zn;%iE{4`9Q2m8f(CgM#@]]=mJ' );
define( 'NONCE_SALT',       'rT8z-]u/)U@%@)%x/G=,{-W|Qy}|#?WKuyPE<CwrC~,Q#uJ0w4%v=e Abf)/f>/i' );

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
