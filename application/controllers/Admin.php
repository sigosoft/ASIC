<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct()
		{
			  parent::__construct();
			  $this->load->library('session');
			  $this->load->model('Crud_model','crud_model');
		}

		public function index()
    {
			$this->load->view('login');
		}
    public function shift($param1="",$param2="")
    {
			if($this->session->userdata('user_type') == ""){
				redirect(base_url() . 'index.php/admin/index','refresh');
			}else{
				if($param1==""){
					$this->load->view('admin/create_shift');
				}
      	elseif($param1=="create_shift"){
					$data['date']=$this->input->post('shift_date');
					$data['plant_id']=$this->input->post('plant_no');
					$data['shift_name']=$this->input->post('shift');
					$data['production_team']=$this->input->post('team');
					$data['mould']=$this->input->post('mould');
					$data['color']=$this->input->post('color');
					$data['mix_design']=$this->input->post('mix');
					$data['quantity']=$this->input->post('qty');
					$data['inserted_date']=date('Y-m-d');
					$this->db->insert('shift',$data);

					redirect(base_url() . 'index.php/admin/shift','refresh');
				}
				elseif($param1=="manage_shift"){
					$data['result']=$this->crud_model->get_shift();
					$this->load->view('admin/manage_shift',$data);
				}
				elseif ($param1 == 'del_view') {
          $id=$this->input->post('id1');
          $this->crud_model->shift_delete($id);
          redirect(base_url() . 'index.php/admin/shift/manage_shift','refresh');
		    }
				elseif($param1=="edit"){
					$data['result']=$this->crud_model->get_shift_data($param2);
					$this->load->view('admin/edit_shift',$data);
				}
				elseif($param1=="update_shift"){
					$data['date']=$this->input->post('shift_date');
					$data['plant_id']=$this->input->post('plant_no');
					$data['shift_name']=$this->input->post('shift');
					$data['production_team']=$this->input->post('team');
					$data['mould']=$this->input->post('mould');
					$data['color']=$this->input->post('color');
					$data['mix_design']=$this->input->post('mix');
					$data['quantity']=$this->input->post('qty');
					$data['inserted_date']=date('Y-m-d');
					$this->db->where('shift_id',$param2);
					$this->db->update('shift',$data);

					redirect(base_url() . 'index.php/admin/shift/manage_shift','refresh');
				}
		}
    }

		public function show_teams($p){
			$d=$this->db->query("select * from production_teams where plant_id='$p' ")->result_array() ;
	    $html="<option value=''>SELECT</option>";
	    for($i=0;$i<count($d);$i++){
		  $html=$html."<option value='".$d[$i]['team_id']."'>".$d[$i]["team_name"]."</option>";
	    }
	   echo $html;
		 }

		 public function qc_data($param1="",$param2="")
     {
 			if($this->session->userdata('user_type') == ""){
 				redirect(base_url() . 'index.php/admin/index','refresh');
 			}else{
				if($param1==""){

					$data['result']=$this->crud_model->get_qc_data();
					$this->load->view('admin/qc_data',$data);
				}
				elseif ($param1 == 'del_view') {
          $id=$this->input->post('id1');
          $this->crud_model->qc_data_delete($id);
          redirect(base_url() . 'index.php/admin/qc_data','refresh');
		    }
				elseif($param1=="edit"){
					$data['result']=$this->crud_model->get_qc_data_by_id($param2);
					$this->load->view('admin/edit_qc_data',$data);
				}
				elseif($param1=="update"){
					$data['date']=$this->input->post('date');
					$data['plant_id']=$this->input->post('plant_no');
					$data['shift']=$this->input->post('shift');
					$data['code_generated']=$this->input->post('code');
					$data['result1']=$this->input->post('res1');
					$data['result2']=$this->input->post('res2');
					$data['result3']=$this->input->post('res3');
					$data['w_reading']=$this->input->post('wread');
					$data['h_reading']=$this->input->post('hread');
					$data['product']=$this->input->post('prod');

					$this->db->where('qc_data_id',$param2);
					$this->db->update('qc_data',$data);

					redirect(base_url() . 'index.php/admin/qc_data','refresh');
				}
			}
		}

		public function product($param1="",$param2="")
		{
		 if($this->session->userdata('user_type') == ""){
			 redirect(base_url() . 'index.php/admin/index','refresh');
		 }else{
			 if($param1==""){
				 $data['result']=$this->crud_model->get_all_products();
				 $this->load->view('admin/products',$data);
			 }
			 elseif($param1=="edit"){
				 $data['result']=$this->crud_model->get_product_by_id($param2);
				 $this->load->view('admin/edit_product',$data);
			 }
			 elseif($param1=="update"){
				 $data['mould']=$this->input->post('mould');
				 $data['color']=$this->input->post('color');
				 $data['quantity']=$this->input->post('qty');
				 $data['base_mixer']=$this->input->post('base');
				 $data['face_mixer']=$this->input->post('face');
				 $data['p_factor']=$this->input->post('p_factor');
				 $data['prod_time']=$this->input->post('prod_time');
				 $data['cycle_time']=$this->input->post('c_time');
				 $data['waste_qty']=$this->input->post('w_qty');
				 $data['comments']=$this->input->post('comments');

				 $this->db->where('product_id',$param2);
				 $this->db->update('products',$data);

				 redirect(base_url() . 'index.php/admin/product','refresh');
			 }
			 elseif($param1=="raw_material"){
				 $data['result']=$this->crud_model->get_product_by_id($param2);
				 $this->load->view('admin/edit_raw_material',$data);
			 }
			 elseif($param1=="raw_material_edit"){
				 $data['raw1']=$this->input->post('raw1');
				 $data['qty1']=$this->input->post('qty1');
				 $data['raw2']=$this->input->post('raw2');
				 $data['qty2']=$this->input->post('qty2');
				 $data['raw3']=$this->input->post('raw3');
				 $data['qty3']=$this->input->post('qty3');
				 $data['raw4']=$this->input->post('raw4');
				 $data['qty4']=$this->input->post('qty4');
				 $data['raw5']=$this->input->post('raw5');
				 $data['qty5']=$this->input->post('qty5');
				 $data['raw6']=$this->input->post('raw6');
				 $data['qty6']=$this->input->post('qty6');

				 $this->db->where('product_id',$param2);
				 $this->db->update('products',$data);

				 redirect(base_url() . 'index.php/admin/product','refresh');
			 }
			 elseif($param1="get_product"){
				 $from=$this->input->post('start_date');
				 $to=$this->input->post('end_date');
				 $data['result']=$this->db->get_where('products',array('date>='=>$from,'date<='=>$to))->result_array();
				 $this->load->view('admin/products',$data);
			 }
		 }
	 }

	 public function report($param1="",$param2="")
	 {
		if($this->session->userdata('user_type') == ""){
			redirect(base_url() . 'index.php/admin/index','refresh');
		}else{
			if($param1==""){
				$data['result']=$this->crud_model->get_product_report();
				$this->load->view('admin/product_report',$data);
			}
		}
	}
}
