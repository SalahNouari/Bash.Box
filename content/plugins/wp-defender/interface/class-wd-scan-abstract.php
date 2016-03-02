<?php

/**
 * @author: Hoang Ngo
 */
abstract class WD_Scan_Abstract extends WD_Component {
	/**
	 * Does this scan require DEV Dashboard
	 * @var bool
	 */
	public $dashboard_required;
	/**
	 * Files need scan
	 * @var array
	 */
	public $files_need_scan = array();
	/**
	 * Some scan doesn't count percent
	 * @var bool
	 */
	public $percentable = false;

	/**
	 * This is the max percent of a step can reach, can do later
	 * @var float
	 */
	public $max_percent;

	/**
	 * @var bool
	 */
	public $is_enabled = true;

	/**
	 * @param WD_Scan_Result_Model $model
	 * @param $next_step
	 *
	 * @return mixed
	 */
	public abstract function process( WD_Scan_Result_Model $model, $next_step = null );

	/**
	 * @param $model
	 *
	 * @return bool
	 */
	protected function maybe_run_this_scan( $model ) {
		if ( get_class( $this ) != $model->current_action ) {
			return false;
		}

		$false_status = array(
			WD_Scan_Result_Model::STATUS_ERROR,
			WD_Scan_Result_Model::STATUS_PAUSE
		);

		if ( in_array( $model->status, $false_status ) ) {
			return false;
		}

		return true;
	}
}