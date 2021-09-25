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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'A1R]Y1SBoX4O5V=3Sy<Z]kv o,~tmA||gvNP!/!0v3L66.=-rj,111&Zs!-A8a0.' );
define( 'SECURE_AUTH_KEY',  'ao_hdC(Hq#S2,H]VM,zH#:v%>Q]PLf5#GV2./&ZM!$GMS:iQz!wH1,Q-Ux|0Q,Ml' );
define( 'LOGGED_IN_KEY',    'qslUUBDcIiufKED:L`??_;_/t&[}Sb]ftNejn1;*fz.=OH9z%3D.UPpuu:DT-CGV' );
define( 'NONCE_KEY',        'WNY?Dp[ci*ox31x~uICNV[PL0+/u1]M<HIusS{ jT-+a|<_veoF)##Ap@]|w9;cX' );
define( 'AUTH_SALT',        '==] ZmH+yI[A+/c.mUjB<r]l5#Q}#4c7iPYujrRS%`clrBP2|j].M7VH=T*$R#vW' );
define( 'SECURE_AUTH_SALT', 'd)L:nKI8$ph+DX[;<PTRv/,F!fq6}ieBa?7w{?Qy+ebb]|jmTmWu5+)?ML6a{1Kp' );
define( 'LOGGED_IN_SALT',   ';sHgjUB5x(GA`5Zbmu{GWqzaWl[-a#Lpf}>@wc2FhV7B+fVq=%SBp4Ll=Dl|tzL&' );
define( 'NONCE_SALT',       'Zy;{X }k<k? /i0*77Np<dQC%ir_GS)STvt=Ee{w7&Q/im+RGCPp]&qsQ6dxXBwR' );
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
