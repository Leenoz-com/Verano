<?php

if (!defined('IN_PHPBB')) {
  exit;
}

if (empty($lang) || !is_array($lang)) {
  $lang = [];
}

$lang = array_merge($lang, [
  'ACP_VERANO_EXT'  => 'Verano Theme',
  'ACP_VERANO_MENU_COLLAPSE' => 'Collapse/Expand Menu',
  'ACP_VERANO_COPYRIGHT' => 'Designed by'
]);