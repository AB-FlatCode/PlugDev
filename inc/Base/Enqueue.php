<?php
namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
  public function register()
  {
    add_action('admin_enqueue_scripts', array( $this, 'enqueue' ) );
  }

  public function enqueue()
  {
     //enqueue scripts
    wp_enqueue_style( 'abdevplugstyle', $this->plugin_url .  'assets/style.css' );
    wp_enqueue_script( 'abdevscript', $this->plugin_url .  'assets/script.js' );
  }

}