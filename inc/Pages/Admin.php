<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class Admin extends BaseController
{
  public $settings;

  public function __construct()
  {
    $this->settings = new SettingsApi();
  }

  public function register()
  {
    //add_action('admin_menu', array( $this, 'add_admin_pages' ) );

    $pages = [

      [
        'page_title' => 'Abdev Plugin',
        'menu_title' => 'Abdev',
        'capability' => 'manage_options',
        'menu_slug' => 'abdev_plugin',
        'callback' => function() { echo '<h1>AbDev OOP</h1>'; },
        'icon_url' => 'dashicons-store',
        'position' => 110
      ]
    ];

    $this->settings->addPages( $pages )->register();

  }

  // public function add_admin_pages()
  // {
  //   add_menu_page('Abdev Plugin', 'Abdev', 'manage_options', 'abdev_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
  // }

  // public function admin_index()
  // {
  //    // require template
  //   require_once $this->plugin_path . 'templates/admin.php';
  // }
}