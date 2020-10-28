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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'country_db' );

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
define( 'AUTH_KEY',         '&bQiL3Xk-A;>DDQ5Y/>ozlGU%d3 hoID<D#q*cb<6B7.OFQ-lI0U?vP^2GJct~Mk' );
define( 'SECURE_AUTH_KEY',  'F[[Xo%7}S_qP$qfke1!8Pb)M/TJk`(4ajzGxwQ,t}[rZv-5qj3i+lEwk9nuZ$3DJ' );
define( 'LOGGED_IN_KEY',    '&_gy;B|mmvQ$n.QeZ..~99cw@Iuk+`t|&Av<D)%p})?* UV=8 d@d6vU?-t`mIK,' );
define( 'NONCE_KEY',        'P.,Vso/@nX r}j<Jn@3HCMr_My&Aw= Yt`-q7>ehqfLDVNaWoN<!+KCa=lW+dTg:' );
define( 'AUTH_SALT',        'P72L^{qK}SF6uBjr.S(m>[bmqf2EhYng[bp~R%R?Y}H4*J{W(,]4`dI$bK}Qdl)u' );
define( 'SECURE_AUTH_SALT', 'i9EtH#P!K)$?Bo@H.(oy2B<TDFkz&-:R%B4&M5#{-L<Q5;]mPSI)fj+p-D[YC-=_' );
define( 'LOGGED_IN_SALT',   'Tf#P5<q_,~dqWU4Sh%kD&|a)jIyRX{Q9z73wDlVRT:uo=|8O<,E-dx.SEt9{f, u' );
define( 'NONCE_SALT',       'xb ^&^fG9<nUT8)]6id-1ee4Mwd1O>iZ@K<H!ys![|E5|?yA]HK>H8a~bZ,S!/<Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cb_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
