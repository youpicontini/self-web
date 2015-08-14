<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'self');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SpS P>X_k&%{r_ OoBq,Meb#OTwn$pPXl=E(YeWEo5HWX5WO#Q=g[&x-d7fYAJxN');
define('SECURE_AUTH_KEY',  'sfH-CQz>/`DVkeY[i1/XdS:./BiYF}M4o?Ag-;PMlP:|,-,c6q4Db6at%I<RZCsk');
define('LOGGED_IN_KEY',    'll}9pG!yxrqZD9-C?c$|%hLjMx|ban 2%&Nafzel-vzSm<>dq&}RMc+NpOqM}[Of');
define('NONCE_KEY',        '*z|Q}Hlks5:,R+-`xQPazOw{heqE-TQv?Sj,~AQjfv;c9mf|dKGBE#}q5e.P|; <');
define('AUTH_SALT',        'fgq^56Y{|iq-I 9>-c+]*F_b%DoSQhNOPi-reVzwn#gd1tH715i]>#Gy8`XV%(xY');
define('SECURE_AUTH_SALT', '|zxn+G`kr@u>g:zXPga$E>hL8|QtESH@]B3Ac8+u]z,oG2.7vb#rGggq$kAf|D/i');
define('LOGGED_IN_SALT',   'u@AKu %(lK)GIPe*2$Ztp/[E]G1NwM!&pZ!@WY!F,{wggcj&OE*%S2l)5SS:W~wE');
define('NONCE_SALT',       '!D;gV|Z hK?/?sz2%S&,RmoPeX4|,AKC$`E|,nsQ&Fe!DKoALIM!VuC@{AiK|6$/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');