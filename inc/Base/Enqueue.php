<?php
namespace Inc\Base;

class Enqueue 
{
  public function register()
  {
    add_action('admin_enqueue_scripts', array( $this, 'enqueue' ) );
  }

  public function enqueue()
  {
     //enqueue scripts
    wp_enqueue_style( 'abdevplugstyle', PLUGIN_URL .  'assets/style.css' );
    wp_enqueue_script( 'abdevscript', PLUGIN_URL .  'assets/script.js' );
  }

}