<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_qc extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('Android_model','android_model');
	}
	public function insert_qcdata()
	{
		$data['plant_id'] = $_POST['plant_id'];
    $data['code_generated'] = $_POST['code'];
    $data['result1'] = $_POST['result1'];
    $data['result2'] = $_POST['result2'];
    $data['result3'] = $_POST['result3'];
    $data['w_reading'] = $_POST['w_read'];
    $data['h_reading'] = $_POST['h_read'];
    $data['shift'] = $_POST['shift'];
    $data['product'] = $_POST['product'];
    $data['date'] = $_POST['date'];
    $data['inserted_date'] =date('Y-m-d');
    $data['time'] = date('h:i:s a', time());

		//$query = $this->android_model->insert_product($data);

    if ($this->android_model->insert_qc($data)){
					$data = [
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
