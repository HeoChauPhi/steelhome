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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Load packages from Composer
if ( file_exists( __DIR__ . '/wp-content/vendor/autoload.php')) {
  require_once( __DIR__  . '/wp-content/vendor/autoload.php');
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fc],o8q&8$cIV78Q&JQn5`=q#k9WHVuL&WAhvFNOixsYZA MF.[Fi[H]X#pW$JE ' );
define( 'SECURE_AUTH_KEY',  'b>D$yHysAkPi<MG>>Hq!ZZ{_qSwPu#w(K22BQ.bGg_0|#R%]<&hw$IvNS1cdS d/' );
define( 'LOGGED_IN_KEY',    '1mMY-QQmp<JPP}>PB!oJ+u!o 2l)rqf>e~b7Lbz<k;/`4?T$A-!L3g*<tt>KaQrf' );
define( 'NONCE_KEY',        'D.(;we,J00ITzYL{0`>e#yh1AvDsi@<2:[)_<G{F170Bnh/q80hQgYuml$n@+!zB' );
define( 'AUTH_SALT',        'QbKh]ds=?F=_j>qcamA[hDatc[@I<</=/7z[KM55gq0,n4@mtej6Bq@zUj|R`bTU' );
define( 'SECURE_AUTH_SALT', '5p_>w>r(@g$%u4z>#0%:qim[kF]y$F]R31#EV{IL/lfQrP&ILpRg&|!10!#ZLv[i' );
define( 'LOGGED_IN_SALT',   '4r:&i9t1>fQur}*]+^4HIMmrG|OFn@%_]N>CH1(AU%AoC`S0u|9|SGdGw!1qW+70' );
define( 'NONCE_SALT',       'ez[9+GL+x>6,sLlCvnVTO*dElU8(j0i%=1!:v]5=AHzU/1]TZnU5B~KfdMn:kwf:' );

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
