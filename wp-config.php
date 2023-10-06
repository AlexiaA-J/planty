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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^)&$~ELrB!+y,.IB?IjJTT*w>2B?G71Fl~J~BU8=2+ZCLJSIc~hH4%bEH;:Ry:eP' );
define( 'SECURE_AUTH_KEY',  'K{@Sy}f@>a*W4nl8N2xXyLrm7OX,yoM9^B^o~@5-Q8/cj_gR)BIX&FCyGY-VbQ!+' );
define( 'LOGGED_IN_KEY',    '`a}uS4~.+>qMO2M&dwOAswPdV}hjsf=66]<R3iLIqS,pwt |6$k$Ohx{sKQ*D24a' );
define( 'NONCE_KEY',        'TAeAl:j}l9l21bRiuvwGbxX<[}U=.(dQ#{a1SR R|NIBWiyt*`~.!rT2T(j0BM(W' );
define( 'AUTH_SALT',        'z=#D8hmp^wt6?n=ji9iDJ+LGU%^shr!|GFugVDA/tyuO 82:)Uw>_<7^N?B,<9XC' );
define( 'SECURE_AUTH_SALT', 'gK}pZ}rzYO/-!l5Yk13rd-|IzYZQ:rbxJ&HrPT0X8F?cfTOtCLO}(`Bh%>8]xq+q' );
define( 'LOGGED_IN_SALT',   '4~ddh29gupSpct>@*4fc)2IK-X*J5F(ya(>XGA`<)K9Rm0Z)ECZi0!6r6;LzDxj_' );
define( 'NONCE_SALT',       'Ebr4sM(k>.7BONjWtTqPFxz+>M X%@8S>Y4%i(;;K)K&r2x~;~WM8CBA&c]T$t[/' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
