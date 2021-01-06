<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_leandromagalhaes' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>cLZ%sMA.,-(rp+%KNdhpyP@:E -$[0xM,~J,Wn9u(*a0V=,Bf.y1));)@LWAe_Z' );
define( 'SECURE_AUTH_KEY',  '/z.<]vW7j:RGB5[355$(N0r)``(Z2CO<PB&@y7`D}:,T]B-8F{fAz2D0l#}MY>:m' );
define( 'LOGGED_IN_KEY',    'Q Mm;PID$^tgLiW<%zP7gLPzA1[Pu=C+C(/i/Z.yVkR6H8;b1%#jhQ:gtJ$Zr-MI' );
define( 'NONCE_KEY',        'AJ&W0*Yla~%m5=BZQ192[SJ1.[f{FY9/,!sMcV4j`<X}08vZo&cQRXBiFwm6)=me' );
define( 'AUTH_SALT',        'pt2zdzqbK9*)`=[[H&5Wa^^TR`PQ0iGUiVF)uz_wGC;;w:ps6K&FqUtnPVbdP;$=' );
define( 'SECURE_AUTH_SALT', 'J&G]x</v{8b|V+wDNf3-yY^ Haum?f]0o9R{j1ZA=(VFJME0a$>sxOjd7K=ek+m*' );
define( 'LOGGED_IN_SALT',   'iA5(konUsr3; lF/|G- #hB5i`O:uffes0[We^T;$*U&cm+W$KZ.(^S*,=)t j+X' );
define( 'NONCE_SALT',       'k_)xs$V}`v~N7}W>ARAZ0[n#uB WB7%a!4rhJ2f%Cf_R]h)6}D(.,Ba{]2Mo:(v`' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
