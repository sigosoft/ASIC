<?php
class Android_model extends CI_Model {
   function __construct()
  {
    $this->load->database();
  }

    public function get_logindetails($user,$pass)
		{
			return $this->db->get_where('login',array('username'=>$user,'password'=>$pass));
		}
    public function get_shift($plant,$shift)
    {
       //   $res="select shift.*,color.*,mix_design_code.*,mould.*,plants.*,production_teams.* from shift inner join color on color.color_id=shift.color inner join mix_design_code on mix_design_code.code_id=shift.mix_design inner join mould on mould.mould_id=shift.mould inner join plants on plants.plant_id=shift.plant_id inner join production_teams on production_teams.team_id=shift.production_team where shift.shift_name='$shift' and shift.plant_id='$plant' and date='$date'";
       //   return $this->db->query($res)->result_array();
       
       //$res="select shift.*,color.*,mix_design_code.*,mould.*,plants.*,production_teams.* from shift inner join color on color.color_id=shift.color inner join mix_design_code on mix_design_code.code_id=shift.mix_design inner join mould on mould.mould_id=shift.mould inner join plants on plants.plant_id=shift.plant_id inner join production_teams on production_teams.team_id=shift.production_team where shift.shift_name='$shift' and shift.plant_id='$plant' and date='$date'";
          $res="select shift.*,color.*,mix_design_code.*,mould.*,plants.*,production_teams.* from shift inner join color on color.color_id=shift.color inner join mix_design_code on mix_design_code.code_id=shift.mix_design inner join mould on mould.mould_id=shift.mould inner join plants on plants.plant_id=shift.plant_id inner join production_teams on production_teams.team_id=shift.production_team where shift.shift_name='$shift' and shift.plant_id='$plant'";
          return $this->db->query($res)->result_array();
    }
    public function insert_product($data)
    {
            return $this->db->insert('products',$data);
    }
    public function get_products($plant)
    {
      //$res = $this->db->get_where('products',array('plant_no'=>$plant))->result_array();
      $this->db->select('product_no');
      $this->db->select('shift_name');
      $this->db->select('generate_code');
      $this->db->select('date');
      $this->db->select('time');
      $this->db->from('products');
      $this->db->where('plant_no', $plant);
      return $this->db->get()->result_array();

    }

    public function insert_qc($data)
    {
            return $this->db->insert('qc_data',$data);
    }

}
