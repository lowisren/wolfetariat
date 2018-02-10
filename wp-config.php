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
define('DB_NAME', 'wolfetariat_wp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'thurston1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PD?+W+GAYT;)F^|I?;+gJyL1O!h,^Qim(!|kyPc >W29r+KG}2|gvcLOu(|j7! X');
define('SECURE_AUTH_KEY',  'w{>}(VWFvi*B:#F)6>ujT`}bLylRFq:4m+0{## x7vWw*Ni+q;qS=bu~:m:[02zf');
define('LOGGED_IN_KEY',    ']O+jKlo6%@k|ay?^ZL>cK5:ams$@+Q24$<4gm7k|eGS|8rucNF`0i>_[aF~-?,nO');
define('NONCE_KEY',        '/N?fpKE-Qq*QN#E>Uc[8b=g^$5SiIrcZ+|#VxX|_em_.m;wn/!z,yK<8FWrId`;D');
define('AUTH_SALT',        'OQrP-|z[O^9/AZ<1av1`D7y(R8$iE]&}5u,0v&tNG-c?|DqfW06Q-)|Z`N0rhuGo');
define('SECURE_AUTH_SALT', 'x|Ku8RI~f;.]l?X19 X+bY<{tm|3@lz2`n^gLPRe)hFp>EhBt7f2q:(c:tdI_2^.');
define('LOGGED_IN_SALT',   ':[+&+G= $7-aJnjB_XL-k3(Ya$NAV.Zd`)A[I?#!I|g;wfS;4^w`jT+{iAR+;kUv');
define('NONCE_SALT',       '7#xqst$9T=54qySueKNpj )I=9DFaa78x,#zw12zL?&h8K+%}gQ>ifln|`q/r0WW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
