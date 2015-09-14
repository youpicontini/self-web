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
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DNt>Lkc`y>4gN*mI{r/39D-mOnFp%qk?m/SSv811+:#2fqiSF-zAA_pGq26(RP{X');
define('SECURE_AUTH_KEY',  '-%ux2,m(2IOw^ dGF8 0##N8A[bW3*i^jv`a7E9B8qKac;p:{7EO*+)};ch#WEX+');
define('LOGGED_IN_KEY',    ']$*+jrj]*ia@y:$ Ii%l iK,U ^{=%P>ahD?U[z=Msvk|l|2axRoFhU[-Rmo>Cz7');
define('NONCE_KEY',        'BuHwk8qxY/3hwI#&WQPJ/Uh,34FQX&c?j00-y@,RENe~@OwK2:G,4V}CxO@321!O');
define('AUTH_SALT',        '{KX&#qBE>&So](m7-XnKYnAh(lQ}++jxlsKj_/XB_3OK/Y%*0Uh%>qPY0(;i_ /N');
define('SECURE_AUTH_SALT', '0TSl_,~>aMDB]-dWc,F0/MA O0)MfE5w1 :4n&K +C02AtXNfn!50&G u]~t!f*p');
define('LOGGED_IN_SALT',   'G.=xTq|~Vm~+lK^cBD?ssv?[wx&H?,E/IuyRAZo2wUj>JV+}m!Ic?fsg6B?HewBA');
define('NONCE_SALT',       '*!I#|k~nW-F{[L]36t0E(HXLj@C<C?@L].:84@Q{U{T]SU=X0A>7&=SFY E!|8{j');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_self_';

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