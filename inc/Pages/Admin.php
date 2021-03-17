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

    $subpages = [

      [
        'parent_slug' => 'abdev_plugin',      
        'page_title' => 'Custom Post Types',
        'menu_title' => 'CPT',
        'capability' => 'manage_options',
        'menu_slug' => 'abdev_cpt',
        'callback' => function() { echo '<h1>Custom Post Types Manager</h1>'; },
  
      ],

      [
        'parent_slug' => 'abdev_plugin',      
        'page_title' => 'Custom Taxonomies',
        'menu_title' => 'Taxonomies',
        'capability' => 'manage_options',
        'menu_slug' => 'abdev_taxonomies',
        'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; },
  
      ],

      [
        'parent_slug' => 'abdev_plugin',      
        'page_title' => 'Custom Widgets',
        'menu_title' => 'Widgets',
        'capability' => 'manage_options',
        'menu_slug' => 'abdev_widgets',
        'callback' => function() { echo '<h1>Widgets Manager</h1>'; },
  
      ]
  ];

    $this->settings->addPages( $pages )->withSubpage( 'Dashboard' )->addSubPages( $subpages )->register();

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