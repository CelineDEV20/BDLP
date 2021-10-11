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
define( 'DB_NAME', 'bdlp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'bdlp_manager' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'BDLP91680!' );

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
define( 'AUTH_KEY',         'j:=N@:^ST^4G|f#Z2GG^3gR6gRgPdHLYD=Iv!-D]ioXSW)=:?=vDR=~ ,5HsAPr=' );
define( 'SECURE_AUTH_KEY',  'yPPUkU!YY|Jw-c(30dkAF&Q_|/eacp;#.S}-{>L`C&Z [9cWg/XX&tG`I{zRt@`3' );
define( 'LOGGED_IN_KEY',    'CfNyhLcgBR[EM[l3t(wGu#J}|P{asBc|nv@0ge`YO-Xl~EH00faZX*;$W#f%f/.6' );
define( 'NONCE_KEY',        'OOZJ[Qs:FzKN;R2c{-F^)Shs>e`4/^qC|LRp0UUd#@]VV!GA:&}b-%Hns(]R0VCH' );
define( 'AUTH_SALT',        '`H?YRuEw5VrsyX_7] 4tAm1zJ^jf[p<*z1]TiPlM~5?CFM/s4e!ni&]N&:-B1XjQ' );
define( 'SECURE_AUTH_SALT', 'j{J#v30vl$%Sx.s04dTjh]#~ebRO]>0>ELq;g&X:%.hK@m*I42na4>|EFKdg Ws9' );
define( 'LOGGED_IN_SALT',   '|uB=R]*cizKa-llxAhqej]PZ(p7~[vU!l~>F`MDHCH<w` Gcc`6E!TYUF]%<)`#A' );
define( 'NONCE_SALT',       '5A#&pm$v/m]POkq~P5v}rAiSZpa5u=Xs}JeFDlYa3sls(2pr0S(O{FCBCTL]2MT ' );
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
