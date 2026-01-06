<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: Polish [pl]
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
  'ACP_VERANO_EXT'  => 'Motyw Verano',
  'ACP_VERANO_MENU_COLLAPSE' => 'Zwiń/Rozwiń Menu',
  'ACP_VERANO_COPYRIGHT' => 'Zaprojketowane przez',
  'ACP_VERANO_ERROR_DIALOG' => 'Pliki JS Verano nie zostały poprawnie załadowane.'
]);