<?php

/**
 * @author: Hoang Ngo
 */
class WD_Hardener_Module extends WD_Module_Abstract {
	private $controllers = array();

	public function __construct() {
		parent::__construct();
		$this->controllers['hardener'] = new WD_Hardener_Controller($this);
	}

	/**
	 * @param $controller
	 *
	 * @return null
	 */
	public function get_controller( $controller ) {
		return isset( $this->controllers[ $controller ] ) ? $this->controllers[ $controller ] : null;
	}
}