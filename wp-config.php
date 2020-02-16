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
define( 'DB_NAME', 'XguuCQ5nBg' );

/** MySQL database username */
define( 'DB_USER', 'XguuCQ5nBg' );

/** MySQL database password */
define( 'DB_PASSWORD', '9rpV1eUy7d' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '*GjsoKVAWdvX%_JQscsSvw07GS,7+!?qsHl3}(!e&)l{iIW?iU|n]EJwP[T#aMSV' );
define( 'SECURE_AUTH_KEY',  'H[sq!93lfM~@.FV zE8?mc|qkr)GNd@vL(<N=lpLJ8zFz<1NtIz@;{L=w2!CLBya' );
define( 'LOGGED_IN_KEY',    ')1u0%:uG&>oa8LgS[U`MF<shm/2(_rI6vBfp_ft1dX*ArU;YA6o~.fsAx%de] eM' );
define( 'NONCE_KEY',        'rY2,)~f~M|yS}Mq2<fy.|n|w$vA|9 P[$9+%@{ZN15N{Hd~lr.!ogxVpW^TG[#CQ' );
define( 'AUTH_SALT',        'Nl.jp}.A=(EX-/^=/54?5_iC5[1R{#rb-pKe8=v(@3%MZ%RtQz#%-O6S[Lg):{,s' );
define( 'SECURE_AUTH_SALT', 'Y)Fj}h%|pOZqodc!Zyj1|H .~!e$$jG6zu7Z6YPz? Of1I?^o]1&on!J.l:mV#K:' );
define( 'LOGGED_IN_SALT',   'f,<Wd|:x}=N7a?!LsgK~:4LBQ[s@${y2ii?Sr>J6;~$ jsM-VmiH$8Y.e(PDC4O*' );
define( 'NONCE_SALT',       'rUCZj%F%:?kVNi;m@#Apr1i6f=dF6~,n*=<#~#UwPtG2Z?1)OA:]v>pK#a-yhj~~' );

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
