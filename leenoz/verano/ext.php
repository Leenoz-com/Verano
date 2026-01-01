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

namespace leenoz\verano;

class ext extends \phpbb\extension\base
{
  public function is_enableable()
  {
    return version_compare(PHP_VERSION, '7.1.3', '>=')
        && defined('PHPBB_VERSION')
        && version_compare(PHPBB_VERSION, '3.3.0', '>=');
  }
}
