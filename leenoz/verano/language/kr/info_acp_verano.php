<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Korean [kr]
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
  'ACP_VERANO_EXT'  => 'Verano 테마',
  'ACP_VERANO_MENU_COLLAPSE' => '메뉴 접기/펼치기',
  'ACP_VERANO_COPYRIGHT' => '디자인:',
  'ACP_VERANO_ERROR_DIALOG' => 'Verano JS 파일이 올바르게 로드되지 않았습니다.'
]);