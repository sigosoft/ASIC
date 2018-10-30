<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_shift extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('Android_model','android_model');
	}
	public function get_shift()
	{
		$plant = $_POST['plant_id'];
    $shift = $_POST['shift'];
    $date = date('Y-m-d');
	
    if ($query=$this->android_model->get_shift($plant,$shift)){
        
					$data = [
					  'shift' => $query,
					  'status' => 'success',
					];
		}
		else {
			$data = [
				'status' => 'failed',

			];
		}
		print_r(json_encode($data));
	}

}