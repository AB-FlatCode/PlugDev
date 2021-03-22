<?php
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{

  public function adminDashboard()
  {
     return require_once("$this->plugin_path/templates/admin.php");
  }

  public function cptDashboard()
  {
     return require_once("$this->plugin_path/templates/cpt.php");
  }

  public function taxonomiesDashboard()
  {
     return require_once("$this->plugin_path/templates/cpt.php");
  }

  public function widgetsDashboard()
  {
     return require_once("$this->plugin_path/templates/widgets.php");
  }

  public function abdevOptionsGroup( $input )
	{
		return $input;
	}

	public function abdevAdminSection()
	{
		echo 'Check this beautiful section!';
	}

	public function abdevTextExample()
	{
		$value = esc_attr( get_option( 'text_example' ) );
		echo '<input type="text" class="regular-text" name="text_example" value="' . $value . '" placeholder="Write Something Here!">';
	}

	public function abdevFirstName()
	{
		$value = esc_attr( get_option( 'first_name' ) );
		echo '<input type="text" class="regular-text" name="first_name" value="' . $value . '" placeholder="Write your First Name">';
	}

}