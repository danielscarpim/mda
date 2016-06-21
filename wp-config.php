<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mdamovelar');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|~a|5cc0,+C[$L.O7S2pPkmwpuyVkkqGyt}mlH|4H,;.a6Y2ij+l]^X+9l4+I(Gl');
define('SECURE_AUTH_KEY',  '7TC46yZ5TU-UQI@%S`w2b`pYEFM|)?{?R8;xXY6/k(-Qr*6b3|`<(WDe-9hA2&-I');
define('LOGGED_IN_KEY',    'DL|7<X *zU,)i{c2alddC=V|WMME[B(8<gp?CFyiI*e]-TTp>!#c:,r#:$h[a}#f');
define('NONCE_KEY',        'YSz&r]85d}k5!(-@W.+{O^}PJ qtH~W8sQ@(lC`)w!o0|5&|?N|WXlVFDieStzg-');
define('AUTH_SALT',        '+kfVS2aD]Ah;C4`lmZ?r!JAYi@]54ORVF&r$7892/@|9mAKz;atm1^uTa3&n<LjL');
define('SECURE_AUTH_SALT', 'NG@--j-KV3Jr1_HG=,eH,6+9zgeAp5,Z+UnjzqA2^j`oSZ&1[-jMpGWmBA8z:=oa');
define('LOGGED_IN_SALT',   '#-eT|bU41<7FcTbB1$MC`e[=|`;M--98PGYOpYeQ-EWwxf;+E/_sRMg p&IXE.(l');
define('NONCE_SALT',       ';DIGP<B^`(X6cgL8=H)#!&_:icPFYKBnpcuI^}R^f&RImi5to6SjjQsthur@Sr|f');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mda_';

define( 'DISALLOW_FILE_EDIT', true );

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
