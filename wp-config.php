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
define( 'DB_NAME', 'williames_costa' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'caraujo' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Ce@87233062' );

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
define( 'AUTH_KEY',         'Ij7h)1NIpXO8<|M)zMb~N$RM^VV<x3tpSN6. +t%dCX;h`}mYLw!5k<xDV~9(C(k' );
define( 'SECURE_AUTH_KEY',  'eo6yIx{t4(2/G!.~9$Wz@BX.K299E_0Nv4F4?X@(0BT9g/}/{}T9YBir?H~)6FiS' );
define( 'LOGGED_IN_KEY',    'GlA:sV,r$%VJ0<1W7^PZhAsqXD-t$BogS0)DD0)kV(=-)ju{2 u|5SG#zKWk(NKy' );
define( 'NONCE_KEY',        ',I5m3fUoZ<rYbFl,H3cC*6d37E>7{0akn.iFDE=U._8fQhfopZFgVb=[iH~0&5{P' );
define( 'AUTH_SALT',        'G 5]+-0y4;8*L,l)-*2$&tn3J:`_Ch|*g/ju4./9aY:El0a)M~rUm*]8Q#g6!xE@' );
define( 'SECURE_AUTH_SALT', 'Tb/y@>^F9xgdOwgjFkz:+7{6H&UK=?URJolGDG,N))kIABCxy~K..0#(eV-+lPBp' );
define( 'LOGGED_IN_SALT',   'T#D[*[Tnqp=y-Tc5|~]:$unxqKLo`ax|m%.gOAr]Ae]kyRuHqIDK{iP:},})Zhpz' );
define( 'NONCE_SALT',       '[U&K7=L@@Hg4TIN2fhBcui{FD/t{ic9%9/4z*h#:7>h2ap[4:sA1A$ FIK.D|e_c' );

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
