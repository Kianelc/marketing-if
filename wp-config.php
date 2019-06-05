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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'inteligenciafiscal' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '2:pBw?^f7Rm|3F@G%MFr5&`Af&&$/kZ*]iL3ch*UT)<7Md`lvQciTiMj#fX2`u5;' );
define( 'SECURE_AUTH_KEY',  ',@}_t[7_[FMUy8tBObG)e<LX;2L>&#gc$TAO[@2J:2hrAq5;hw+CP+yb9y[lb[5D' );
define( 'LOGGED_IN_KEY',    '&FSffqwIvI2TWGU@IH&:%da+#^wU#o,veWm+R5V4eHeL1o5|0.TswGul4tr#Sefq' );
define( 'NONCE_KEY',        '!8.8p6/1*li3AoW-9Hr(2rfYNBXqO?Z98I9*&#=nO]kgI0!%b%nND~+tBAYu`@?O' );
define( 'AUTH_SALT',        'V@aQIr06u s*YF+U+9IrIBuz.<k%-&{ASH}F0lbd2{h>wxKjze{&b%`rRv{n,Ur{' );
define( 'SECURE_AUTH_SALT', ':j*|Vp];}V@1KA#vxk[5vZ=R##TRUVCe$e&p6|{|)*u=[>9/NMzw3b:}zG[!Ish+' );
define( 'LOGGED_IN_SALT',   '*VH2<tAc,MC.H1TzI/:LbYA75#xGPUbnW%NL`lD`lB&vip+ }YIKsAH#_/[[Dmdx' );
define( 'NONCE_SALT',       'ZcH8b9J3ZeE!8.WW}2Er@~qe@h(]?C@Ym>k2@(px_=oVbjHMa8TEnl[&ZexN:`0[' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
