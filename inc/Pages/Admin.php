<?php

namespace Inc\Pages;


use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;



class Admin extends BaseController
{
  public $settings;
  public $callbacks;

  public $pages = array();
  public $subpages = array();


  public function register()
  {

    $this->settings = new SettingsApi();

    $this->callbacks = new AdminCallbacks();


    $this->setPages();

    $this->setSubPages();
   

    $this->settings->addPages( $this->pages )->withSubpage( 'Dashboard' )->addSubPages( $this->subpages )->register();

  }

  public function setPages()
  {
    $this->pages = [

      [
        'page_title' => 'Abdev Plugin',
        'menu_title' => 'Abdev',
        'capability' => 'manage_options',
        'menu_slug' => 'abdev_plugin',
        'callback' =>  array( $this->callbacks, "adminDashboard" ),
        'icon_url' => 'dashicons-store',
        'position' => 110
      ]
    ];

  }

  public function setSubPages()
  {
      $this->subpages = [

        [
          'parent_slug' => 'abdev_plugin',      
          'page_title' => 'Custom Post Types',
          'menu_title' => 'CPT',
          'capability' => 'manage_options',
          'menu_slug' => 'abdev_cpt',
          'callback' => array( $this->callbacks, "cptDashboard" ),
    
        ],

        [
          'parent_slug' => 'abdev_plugin',      
          'page_title' => 'Custom Taxonomies',
          'menu_title' => 'Taxonomies',
          'capability' => 'manage_options',
          'menu_slug' => 'abdev_taxonomies',
          'callback' => array( $this->callbacks, "taxonimiesDashboard" ),
    
        ],

        [
          'parent_slug' => 'abdev_plugin',      
          'page_title' => 'Custom Widgets',
          'menu_title' => 'Widgets',
          'capability' => 'manage_options',
          'menu_slug' => 'abdev_widgets',
          'callback' => array( $this->callbacks, "widgetsDashboard" ),
    
        ]
    ];
    
  }

}