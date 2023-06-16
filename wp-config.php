<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cQT8;IO*KA|O[FGeq0zd/;X6P0TPK[0#* jl<ZQAX@H?Q-}2=qA.Q.4u)M=B1r?T' );
define( 'SECURE_AUTH_KEY',  '#~u1j?&HDpX(5&|}}~25/0506@DT$uS%-SF<m4ow]vH9TE{.<S=7/^L9De[)_WAr' );
define( 'LOGGED_IN_KEY',    'eYicLW*SPErg<U)1PhylVKNKL `WPY$TppV&Ig#y~u<asQ* >^9&:V<Q#<vw=8Vx' );
define( 'NONCE_KEY',        'l=d:@)5F+N@;MS}N_(rrPKwn:Y+fo](|/iGEXFO4V;)3`Uw)})7~~4#?6KgeZO0L' );
define( 'AUTH_SALT',        'S/as]{UFi[Buh5DCEvdd0QfwC-Lyl&Z_v4:JzAL<R0!?K:7=EU+@Q0~XF]z%jX@<' );
define( 'SECURE_AUTH_SALT', 'jt(m+>V5By.ceRtzzP ,XUTp+5[nv9VCBgx1Rj/O. 0ptQFZfA+Fc3a (S_m-WKV' );
define( 'LOGGED_IN_SALT',   '=|25o*,ILPNmnE}hwWA[tL7#Rfqwl3M=)S2j;s-a:mh7qCW0P]+;w53$,&{)%QQw' );
define( 'NONCE_SALT',       'dYjDT)o-MxI^0lksKtUcmEeFmq_eMHHm9CF0DI#YFAc8|1^|,!fFTJh.!]wN.5 !' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
