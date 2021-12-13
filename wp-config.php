<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EP*I.^B}e684mC}bX_VUbZ0$ b)>VsH;4.U+&Rmkyl&`%g~%X`V/@)XokWcsNm&R' );
define( 'SECURE_AUTH_KEY',  '%8y4/=6fB26LmoD#A.0m2z?/Y^1@xeEyYgmO7vOyMvw2j+/<f$SNJ(/3PznjqmAH' );
define( 'LOGGED_IN_KEY',    '|xCa|+Q]uJ;N?{Sm!p/f>&[%FnX}V[Ma_|A!4p1CzFgaP{gf.E57NuZM]GXFJ+_u' );
define( 'NONCE_KEY',        'ysWF&DY?QupfZ?;MK,(N+kfgH3K4%uGh7dAu;*n%O.tWc~UAk#YV%d(>qK+!Z:5A' );
define( 'AUTH_SALT',        '*lXT;G9i$llk`Nm>$#!iCpd7zaxS2lw,f9h72g=7*i=anSJY]5fipXF@T3?A))w-' );
define( 'SECURE_AUTH_SALT', 'IK@C3W`HTP.#AP-6mB]^n3/BI|oQ%`l2w_li0Uhm.-&U}nw!hO:alo3bv_/!*8XM' );
define( 'LOGGED_IN_SALT',   '=jFUD7$X@|6+VC$CuV%=bz@|_43h[D4UH8k6<CuGW#L=>?wQ@afS:<Udt,YG$%LH' );
define( 'NONCE_SALT',       'zFa@~dL#{=,yXi2D1&xkT4L(ZZ>MMbN$4J2o9*_HH DZguWv,/b/1n;ySd^Ub7{h' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
