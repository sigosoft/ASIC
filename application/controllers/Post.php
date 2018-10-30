<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

		public function __construct()
		{
			  parent::__construct();
			  $this->load->library('session');
			$this->load->model('Postmodel','post');
		}

	public function index()
	{
		$this->load->view('login');
	}

public function login_check()
	{

		$user=$this->input->post('username');
	 $pass=md5($this->input->post('password'));
	 $query = $this->db->get_where('login', array(
							 'username' => $user,
							 'password' => $pass)
			 );

			 if ($query->num_rows() > 0) {
					 $this->session->set_userdata('user_login', 'yes');
					 $this->session->set_userdata('name', $query->row()->name);
					 $log_id=$this->session->set_userdata('login_id', $query->row()->login_id);
					 $this->session->set_userdata('username', $query->row()->username);
					 //$utype = $query->row()->user_type;
					 $utype = $this->session->set_userdata('user_type', $query->row()->usertype);
					 $this->db->where('login_id', $query->row()->login_id);
					 $this->db->update('login', array('last_login' => time()));
			 }

			redirect(base_url() . 'index.php/post/dashboard');

	}
	public function dashboard()
    {
		if($this->session->userdata('user_type') == ""){
			redirect(base_url() . 'index.php/post/index','refresh');
		}else{

			if($this->session->userdata('user_type') == "admin"){
			$this->load->view('admin/dashboard');}
			else{
			redirect(base_url() . 'index.php/post/index'); }
		}
	}
public function logout()
	{
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('login_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('user_type');
		redirect(base_url() . 'index.php/post/index','refresh');
	}

}
