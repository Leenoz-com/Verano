<?php

/**
*
* Verano Theme extension for the phpBB Forum Software package.
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
	'ACP_VERANO_MENU_TOGGLE' => 'Toggle menu',
	'ACP_VERANO_MENU_COLLAPSE' => 'Collapse/Expand Menu',
	'ACP_VERANO_COPYRIGHT' => 'Designed by',
	'ACP_VERANO_ERROR_DIALOG' => 'Verano JS files were not loaded correctly.'
]);