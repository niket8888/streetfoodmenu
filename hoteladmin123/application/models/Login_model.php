<?php defined('BASEPATH') OR exit('No direct script access allowed'); 


class Login_model extends CI_Model
{

	public function check_user($data){
		$dat = $this->db->get_where('login',array('user_name'=>$data['user_name']))->result();
// get_where is a Query of where
	
		if (empty($dat)) {
			// chekking username 
			return 'Invalid Username';
		}else{
			$this->load->library('encryption');  
			//if right
			$DBuser_password = $this->encryption->decrypt($dat[0]->user_password);
			if(password_verify($data['user_password'],$DBuser_password)){
				return $dat;
				//hash varifying by password_verify
			}else{
				// chekking password right
				return 'invalid password';
			}

		}
	}
}










?>

