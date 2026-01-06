<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Dutch [nl]
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
  'ACP_VERANO_EXT'  => 'Verano Thema',
  'ACP_VERANO_MENU_COLLAPSE' => 'Menu inklappen/uitklappen',
  'ACP_VERANO_COPYRIGHT' => 'Ontworpen door',
  'ACP_VERANO_ERROR_DIALOG' => 'De JS-bestanden van Verano zijn niet correct geladen.'
]);