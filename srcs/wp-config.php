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

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'efinicke' );
define( 'DB_PASSWORD', 'efinicke' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );


define('AUTH_KEY',         ')vtC_fL]ZYJoK#)#d#YJ1i2!cT^m41 |`wC|d;rQf26xw5ce==z}S5-,_B`]Nv@r');
define('SECURE_AUTH_KEY',  's[=A*j+iNHKxs|}@7F|>:pobDFkd uHd2/x2M AKRU~6iJKbN&55:y|CXJ`B_,_8');
define('LOGGED_IN_KEY',    '~-gwk55=q>pW-[lMvY^G 9s&Ow,|$Yj6ilv!bvi:$Dx^WI[h&Wqj9/JfvsEDwAoI');
define('NONCE_KEY',        'Uj+uZ-v|M94IOnqn|gfq@8E.VX;Ua{0|Cf)F]-!HR@zh/R~n@0D`tq]mC;lojY6+');
define('AUTH_SALT',        '1joI*w8UlIZ5J_UpwSuZ#7{ivjaZv^/(%-XHEV1s-.jd~&9 0;O8#FQnR7s<{H1`');
define('SECURE_AUTH_SALT', '+dy%_As>odZed:#wyOS@t;r^+5C7*txqkvldmwyn_|a-KxPc({%@|@+pHW7cbO0UsL^I(-RT- #I]1=rubgzsN]DL*z9');
define('LOGGED_IN_SALT',   '_{Oh!*0;0]Go r1!]$p?(R&}xD!{s%4aTO^[+?-7v0Iw:xp-Fy2RDX5Qvbg:O~|D');
define('NONCE_SALT',       'w+eCX.=W4= *>f-/Pg8#W:K,1oPGZ:B6[1^,U0.e69^a0)LWJP#@+-}a;Cyy6Gb)');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';