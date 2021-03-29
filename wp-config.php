<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wbapytybyg');

/** MySQL database username */
define('DB_USER', 'wbapytybyg');

/** MySQL database password */
define('DB_PASSWORD', 'BDD2bPfKAR');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
require('wp-salt.php');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yztub_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */

define('FS_METHOD','direct');

define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('AUTH_KEY', '!it&=YTPntU].;~}D[(5CNBUw)la39k1N+D}0C|-l<e=KFi8A`E.EMfI.OvUHiW9');
define('SECURE_AUTH_KEY', '1W/pgaJ1n);6#||hEb8:~+[26m.53:l0BT1w##2erTy[cy](lUAWoU9S6_7Vr*iD');
define('LOGGED_IN_KEY', 'GwtYj,Ab=2kEP.*=lLKo5VRK&{F8X|bF,mG(&UXi;bG/B}p@LQS;j_ko5zRAK;Su');
define('NONCE_KEY', 'u*^#k)%qR?A2:xeb[,E6_1{8[Yj~S7a1!@^`o%wevcUG+W}fbLLA_];%:G}oTe)b');
define('AUTH_SALT', '?6%x@N#t75Fc!),m4H2Jq=To|^nE/t%hD1iZAHsl3B.#e5&I/mamj)jPcdbS#Gn.');
define('SECURE_AUTH_SALT', '(%%~sU~adeck7Ip?Z]aQ,lD2uK%qD!Fc2#Q2Lb7A<_(5Fu&hj-{[(Z@yV2udsEfI');
define('LOGGED_IN_SALT', 'ZO_n8?b)/5s=~4F%^hmDBo3MHk/*{t&WHUYfCQu.J.d49]Mgz,=}g;0}+[UPf,Yc');
define('NONCE_SALT', 'SRM&k1M]=*md[qro7Ylc8mzz7?hzv,D&}JG^[~(Jm)WB0JLzwyM;e}7}aEH.|K+{');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//Disable File Edits
define('DISALLOW_FILE_EDIT', true);