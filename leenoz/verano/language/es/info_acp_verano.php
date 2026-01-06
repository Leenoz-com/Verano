<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Spanish [es]
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
  'ACP_VERANO_MENU_COLLAPSE' => 'Colapsar/Expandir Menú',
  'ACP_VERANO_COPYRIGHT' => 'Diseñado por',
  'ACP_VERANO_ERROR_DIALOG' => 'Los archivos JS de Verano no se cargaron correctamente.'
]);