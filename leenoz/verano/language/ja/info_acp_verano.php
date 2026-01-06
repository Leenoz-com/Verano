<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Japanese [ja]
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
  'ACP_VERANO_EXT'  => 'Verano テーマ',
  'ACP_VERANO_MENU_COLLAPSE' => 'メニューの折りたたみ / 展開',
  'ACP_VERANO_COPYRIGHT' => 'デザイン：',
  'ACP_VERANO_ERROR_DIALOG' => 'Verano の JS ファイルが正しく読み込まれませんでした。'
]);