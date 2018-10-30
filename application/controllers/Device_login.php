<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_login extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('Crud_model','crud_model');
	}
	public function login_check()
	{
		$user = $_POST['username'];
		$password = md5($_POST['password']);
		$query = $this->crud_model->get_logindetails($user,$password);
	    if ($query->num_rows() > 0){
	    $profile = $this->db->query("SELECT * FROM login where username='$user' and password='$password'")->row()->login_id;

					$data = [
					    
					    'Uesr_id' => $profile,
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
