<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Simplified-Chinese [zh_cmn_hans]
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
  'ACP_VERANO_EXT'  => 'Verano 主题',
  'ACP_VERANO_MENU_COLLAPSE' => '折叠/展开菜单',
  'ACP_VERANO_COPYRIGHT' => '设计者：',
  'ACP_VERANO_ERROR_DIALOG' => 'Verano 的 JS 文件未能正确加载。'
]);