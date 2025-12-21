<?php

namespace leenoz\verano\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use phpbb\user;
use phpbb\auth\auth;
use phpbb\template\template;
use phpbb\template\twig\environment;
use phpbb\filesystem\filesystem;

/**
 * Verano Event listener.
 */
class main_listener implements EventSubscriberInterface
{
  /** @var user */
  protected $user;

  /** @var auth */
  protected $auth;

  /** @var template */
  protected $template;

  /** @var environment */
  protected $twig;

  /** @var filesystem */
  protected $filesystem;

  /**
  * Constructor
  *
  * @param user           $user             User object
  * @param auth					  $auth             Auth object
  * @param template       $template         Template object
  * @param environment    $twig_environment Twig environment
  * @param filesystem			$filesystem       Filesystem object
  * @access public
  */
  public function __construct(
    user $user,
    auth $auth,
    template $template,
    environment $twig_environment,
    filesystem $filesystem
  )
  {
    $this->user = $user;
    $this->auth	= $auth;
    $this->template = $template;
    $this->twig = $twig_environment;
    $this->filesystem	= $filesystem;
  }

  public static function getSubscribedEvents()
  {
    return [
      'core.adm_page_header' => 'load_style_settings_data',
    ];
  }

  /**
  * Load theme options
  */
  public function load_style_settings_data()
  {
    global $phpbb_root_path, $phpbb_admin_path;

    $loader = $this->twig->getLoader();
    $paths = [ $phpbb_root_path . 'ext/leenoz/verano/adm/style' ];
  
    $absolute_path = $this->filesystem->realpath($phpbb_root_path);

    foreach ($loader->getPaths() as $path) {
      $paths[] = $phpbb_root_path . rtrim($this->filesystem->make_path_relative($path, $absolute_path), '/\\');
    }

    // Make phpBB render ADM templates from the extension's folder instead of the default style.
    $this->template->set_custom_style([
      [
        'name' => 'adm',
        'ext_path' => 'adm/style/',
      ],
    ], $paths);

    // Get the current user avatar
    $avatar = function_exists("phpbb_get_user_avatar") ? phpbb_get_user_avatar($this->user->data, 1) : null;

    // Send the data to the ACP template
    $this->template->assign_vars([
      'ADMIN_PATH' => $phpbb_admin_path,
      'U_AVATAR' => $avatar
    ]);
  }
}