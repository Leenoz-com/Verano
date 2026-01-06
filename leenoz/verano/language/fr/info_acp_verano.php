<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
* Language: French [fr]
*
* @author Leenoz <support@leenoz.com>
* @copyright (c) Leenoz <https://leenoz.com>
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
* @translator Fred rimbert <https://forums.caforum.fr>
*/

if (!defined('IN_PHPBB')) {
  exit;
}

if (empty($lang) || !is_array($lang)) {
  $lang = [];
}

$lang = array_merge($lang, [
  'ACP_VERANO_EXT'  => 'Thème Verano',
  'ACP_VERANO_MENU_COLLAPSE' => 'Réduire/Développer le menu',
  'ACP_VERANO_COPYRIGHT' => 'Développé par',
  'ACP_VERANO_ERROR_DIALOG' => 'Les fichiers JS de Verano n’ont pas été chargés correctement.'
]);