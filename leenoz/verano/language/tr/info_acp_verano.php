<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Turkish [tr]
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
  'ACP_VERANO_EXT'  => 'Verano Teması',
  'ACP_VERANO_MENU_COLLAPSE' => 'Menüyü Daralt/Genişlet',
  'ACP_VERANO_COPYRIGHT' => 'Tasarımcı',
  'ACP_VERANO_ERROR_DIALOG' => 'Verano JS dosyaları doğru şekilde yüklenemedi.'
]);