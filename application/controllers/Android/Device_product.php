<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_product extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('Android_model','android_model');
	}
	public function insert_product()
	{
	    date_default_timezone_set('Asia/Kolkata');
	    $im=$_POST['image'];
	    $url = FCPATH.'uploads/';
    	$rand='P'.date('Ymd').mt_rand(1001,9999);
    	$userpath = $url.$rand.'.png';
    	//$path = "uploads/".$rand.'.png';
    	file_put_contents($userpath,base64_decode($im));
    	$path = "uploads/".$rand.'.png';
 
	//$data['image'] = $_POST['image'];
	 $data['image']=  $path; 
	$data['plant_no'] = $_POST['plant_id'];
    $data['shift_name'] = $_POST['shift'];
    $data['product_no'] = $_POST['product_no'];
    $data['mould'] = $_POST['mould'];
    $data['color'] = $_POST['color'];
    $data['quantity'] = $_POST['quantity'];
    $data['base_mixer'] = $_POST['base_mixer'];
    $data['face_mixer'] = $_POST['face_mixer'];
    $data['p_factor'] = $_POST['p_factor'];
    $data['prod_time'] = $_POST['prod_time'];
    $data['cycle_time'] = $_POST['cycle_time'];
    $data['prod_team'] = $_POST['prod_team'];
    $data['waste_qty'] = $_POST['waste_qty'];
    $data['comments'] = $_POST['comments'];
    $data['generate_code'] = $_POST['generate_code'];
    $data['date'] = date('Y-m-d');
    $data['time'] = date('h:i:s a', time());
    //$data['image'] = $_POST['image'];

    $data['raw1'] = $_POST['raw1'];
    $data['qty1'] = $_POST['qty1'];
    $data['raw2'] = $_POST['raw2'];
    $data['qty2'] = $_POST['qty2'];
    $data['raw3'] = $_POST['raw3'];
    $data['qty3'] = $_POST['qty3'];
    $data['raw4'] = $_POST['raw4'];
    $data['qty4'] = $_POST['qty4'];
    $data['raw5'] = $_POST['raw5'];
    $data['qty5'] = $_POST['qty5'];
    $data['raw6'] = $_POST['raw6'];
    $data['qty6'] = $_POST['qty6'];

	

    if ($this->android_model->insert_product($data)){
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
	
	public function get_products()
	{
    $plant = $_POST['plant_id'];
    if ($prod=$this->android_model->get_products($plant)){
          $data = [
            'products' => $prod,
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
