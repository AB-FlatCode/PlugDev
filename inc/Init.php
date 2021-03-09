<?php
/**
 * @package AbDev Plugin
 */

namespace Inc;

final class Init
{ 

  /**
   * Store all classes in array
   *
   * @return array
   */
  public static function get_services()
  {
    return [
      Pages\Admin::class,
      Base\Enqueue::class,
      Base\SettingsLinks::class,
    ];
  }

  /**
   * Loop the classes, initialize them and call register method if it exists
   *
   */
  public static function register_services()
  { 
    foreach ( self::get_services() as $class ) {
      $service = self::instantiate( $class );

      if ( method_exists( $service, 'register' ) ) {
        $service->register();
      }
    }

  }

  /**
   * Intialize a class
   *
   * @param [class] $class from services array
   * @return class new instance of the class
   */
  private static function instantiate( $class )
  {
    $service = new $class;

    return $service;
  }
  
}
