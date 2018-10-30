<?php
class Postmodel extends CI_Model {

		function login($user,$pass)
		{
		$pass=md5($pass);
		$data=array('username'=>$user,'password'=>$pass);
		$rs=$this->db->get_where('login',$data);

      		$res=$rs->row();
                if(isset($res))
		{
				return $res;
		}

		}
}
?>
