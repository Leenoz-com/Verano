<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Arabic [ar]
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
  'ACP_VERANO_EXT'  => 'قالب Verano',
  'ACP_VERANO_MENU_COLLAPSE' => 'طي / توسيع القائمة',
  'ACP_VERANO_COPYRIGHT' => 'تصميم بواسطة',
  'ACP_VERANO_ERROR_DIALOG' => 'لم يتم تحميل ملفات Verano JS بشكل صحيح.'
]);