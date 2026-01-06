<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Brazilian-Portuguese [pt_br]
*
* @author Leenoz <support@leenoz.com>
* @copyright (c) Leenoz <https://leenoz.com>
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

if (!defined('IN_PHPBB')) {
  exit;
}

if (empty($lang) || !is_array($lang)) {
  $lang = [];
}

$lang = array_merge($lang, [
  'ACP_VERANO_EXT'  => 'Tema Verano',
  'ACP_VERANO_MENU_COLLAPSE' => 'Colapsar/Expandir Menu',
  'ACP_VERANO_COPYRIGHT' => 'Desenvolvido por',
  'ACP_VERANO_ERROR_DIALOG' => 'Os arquivos JS do Verano não foram carregados corretamente.'
]);