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
define('DB_NAME', 'marcusbo_wp142');

/** MySQL database username */
define('DB_USER', 'marcusbo_wp142');

/** MySQL database password */
define('DB_PASSWORD', ']Ss83P68.r');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j3dobfcxpek4bnjpyt6m4lqltls5evhxa2touqjm1eaxanlogsjjc872j8bhqtxk');
define('SECURE_AUTH_KEY',  'altexqdkcwtue2wlehxi5waedy6mp5schhknqlmtcfc6toewbrjlvgtgejwqrrbz');
define('LOGGED_IN_KEY',    'xoy80wgjmy6sry1escero9wrx7kjyq7yqbw3rmhhyz0zjxlzzmkfd4uo6yyxynov');
define('NONCE_KEY',        '24kns9havtrctbfgbo6fcunoturij2fbbtexuximxuqn96uzk5u0om271pudhnlf');
define('AUTH_SALT',        '2akk2thqkysenewbvcfl7guwbkqh8lt5bjvkoxlbmp35c2nmj4aplro8og20u60a');
define('SECURE_AUTH_SALT', 'bkmokivw47nar2xp5uenjm85mtgk0yr5tkswgi1nq2mbtn65n2heuaqfrahvv1j8');
define('LOGGED_IN_SALT',   'pflrycno3ld6wmfuuo1aiaitbxbvjjrvbagkiddek8xk0ruhcboi2gjpcrdu05a6');
define('NONCE_SALT',       'lmglwfkgemai2djtfninmwlhgory0tryzhi3dfcpo6jqbk0vlekk8unlrbpzdonh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmq_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
