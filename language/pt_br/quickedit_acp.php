<?php
/**
*
* Quickedit ACP [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.1] (https://github.com/phpBBTraducoes)
* @package Quickedit
* @copyright (c) 2014 Marc Alexander ( www.m-a-styles.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALLOW_QUICK_EDIT'		=> 'Ativar edição rápida',
	'ALLOW_QUICK_EDIT_EXPLAIN'	=> 'Esta opção permite que a edição rápida seja desabilitada em todo o forum. Quando ativado, as configurações específicas do fórum serão usadas para determinar se a edição rápida está disponível em fóruns individuais.',
	'ALLOW_QUICK_EDIT_BUTTON'	=> 'Enviar e ativar a edição rápida em todos os fóruns',
	'ENABLE_QUICK_EDIT'		=> 'Ativar edição rápida',
	'ENABLE_QUICK_EDIT_EXPLAIN'	=> 'Permite a edição rápida neste fórum. Esta configuração não é considerada se a edição rápida for para fóruns desativados. A edição rápida só estará disponível para usuários que tenham permissão para editar postagens neste fórum.',
));
