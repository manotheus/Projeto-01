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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'Projeto-01' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'I52V=R|bD*[z{_]8q9S7LWth/lm0&`JDPpb+OE~tKj7SP)*#^$eB:;+0*==JN_r8' );
define( 'SECURE_AUTH_KEY',  'O(5pKB]Tdu OfBwPgImWE} ,e+p l>kC&{/usRer_Op53=6hpk:Feuq}I +ZC|GZ' );
define( 'LOGGED_IN_KEY',    'YD/;W_igwsCL{qK!TfKr-8s$`G#/J$|Q(r*fzN[`<?[A>_UQFY5YHGGhc4AEjux5' );
define( 'NONCE_KEY',        '~ouQ50XhsX=o Ia/idAtpTdo$S.8w#ucHzcS2D|T~R1Q`SH$iea4+LdVPy=8Yrs@' );
define( 'AUTH_SALT',        '>FXR`%Gm{%sk$Ds71QR-K{<^YBwO1gm23-6.$xxDUWrmkRfdr~>~r9j4Ar8*vo)D' );
define( 'SECURE_AUTH_SALT', ',.GC-y.(&XqsC9r_dAzZ<S,Ky!_IKjAy6wU+`%v[]*6_ )~qUQ}E_0]$&ce5QZ8Z' );
define( 'LOGGED_IN_SALT',   'uxB>L^&|[W{T2v!&nQn@dt[=!yit*UQnr29L2dCXoG[Oh&eBZ|?SI.wqXkuk*z*x' );
define( 'NONCE_SALT',       '>+(%v^L!baMA(W+lX%;^8(=EIT6L2/OR`RD#_8aJ/_J[O peuAD^f!;mJMz@pvt^' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
