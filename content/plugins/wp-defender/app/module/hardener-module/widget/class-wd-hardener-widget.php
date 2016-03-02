<?php

/**
 * @author: Hoang Ngo
 */
class WD_Hardener_Widget extends WD_Controller {
	public function display() {
		//because we dont have any hook when wp or plugin/theme upgrade, so refresh here
		$module     = wp_defender()->global['module_manager']->get_module_instance( 'WD_Hardener_Module' );
		$controller = $module->get_controller( 'hardener' );
		$controller->update_results();
		$results = WD_Utils::get_setting( 'hardener->results' );
		$modules = $results['issue'];

		$this->render( 'widgets/hardener', array(
			'modules' => $modules
		), true );
	}
}