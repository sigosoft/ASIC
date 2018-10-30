<?php
class Crud_model extends CI_Model {
   function __construct()
  {
    $this->load->database();
  }

    public function get_logindetails($user,$pass)
		{
			return $this->db->get_where('login',array('username'=>$user,'password'=>$pass));
		}
    public function get_shift()
		{
			return $this->db->get('shift')->result_array();
		}
    public function shift_delete($id)
		{
			$this->db->where('shift_id', $id);
      $this->db->delete('shift');
			return true;
		}
    public function get_shift_data($id)
		{
			return $this->db->get_where('shift',array('shift_id'=>$id))->result_array();
		}
    public function get_qc_data()
		{
      $this->db->order_by("qc_data_id",'desc'); // Order by
			return $this->db->get('qc_data')->result_array();
		}
    public function qc_data_delete($id)
		{
			$this->db->where('qc_data_id', $id);
      $this->db->delete('qc_data');
			return true;
		}
    public function get_qc_data_by_id($id)
		{
			return $this->db->get_where('qc_data',array('qc_data_id'=>$id))->result_array();
		}
    public function get_all_products()
		{
      $this->db->order_by("product_id",'desc'); // Order by
			return $this->db->get('products')->result_array();
		}
    public function get_product_by_id($id)
		{
			return $this->db->get_where('products',array('product_id'=>$id))->result_array();
		}
    public function get_product_report()
		{
      $this->db->order_by("product_id",'desc'); // Order by
			return $this->db->get('products')->result_array();
		}
}
