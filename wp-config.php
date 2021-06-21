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
define( 'DB_NAME', 'laurashop' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '%=a$ZW(qysX+sP4m;Fy,w=5}v`t1Nw:3^wS?KXt5PU}#-SPTq+6GM;8]?6=*)FVv' );
define( 'SECURE_AUTH_KEY',  'ojA|>|8p1,B$h{r3.&*Vw4|By@<req6zw aC`jM86SEwl8_ B4Q&GLUECmB-M(mX' );
define( 'LOGGED_IN_KEY',    '7RiP$Fl$4}:ss|9E%ix&TF)=;0h<UK(2.v5cAF{aT<;%c2f)uI}?g)PK2pq?<2A%' );
define( 'NONCE_KEY',        'i||h}IY-/<25J,w0$fOn6pEE#x<e|fLz8YQ;*:$v?_r{JP );;M3qvFoY4nS,[:K' );
define( 'AUTH_SALT',        'rCFGPJkfz+;(Hyr>fuqg-KywT0qwU:N#V{/M3&LCr!i6B]Q?&|ecU}b,vl2+.kgJ' );
define( 'SECURE_AUTH_SALT', '#m=!K[ );hcc,tg?tf?RG3Je2so%#WxH5gxiZDmS*][>qTQsC:<_pDSn`KHy8L]v' );
define( 'LOGGED_IN_SALT',   ')`qZyE,,lqwvDck]-,GACWy/o8xIh(1o;OgmG09L>!;BQ@MeQau^OP$VoVY..<RG' );
define( 'NONCE_SALT',       'u@@=gd$d{wT]V,>YB1ygxFjc$6,@Tb#ni0NtrF=jrN:Pi*agxFi<@ZMWZe:_nult' );
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
