<div class="wrap">
	<h1>abdev Plugin</h1>
	<?php settings_errors(); ?>

	<form method="post" action="options.php">
		<?php 
			settings_fields( 'abdev_options_group' );
			do_settings_sections( 'abdev_plugin' );
			submit_button();
		?>
	</form>
</div>