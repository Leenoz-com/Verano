<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Russian [ru]
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
  'ACP_VERANO_EXT'  => 'Тема Verano',
  'ACP_VERANO_MENU_COLLAPSE' => 'Свернуть/Развернуть меню',
  'ACP_VERANO_COPYRIGHT' => 'Дизайн от',
  'ACP_VERANO_ERROR_DIALOG' => 'Файлы JS Verano не были загружены корректно.'
]);