<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login_model extends CI_Model 
{
	function __construct() 
	{  
		parent::__construct();  
		$this->load->library('encryption');
	 function Sanitiesss($a) { $a = stripcslashes($a); return htmlspecialchars($a); } 
	} 

	public function check_user($data){

$sani_username = Sanitiesss($data['username']);
$sani_password = Sanitiesss($data['password']);

		$dat = $this->db->get_where('user_login',array('username'=>$sani_username))->result();
	
		if (empty($dat)) { 
			return 'Invalid Username';
		}else{
			$decryptpasssword = $this->encryption->decrypt($dat[0]->password);
			if($sani_password == $decryptpasssword){
				return $dat;
			}else{
				return 'invalid password';
			}
		}
	}

	public function updt_olduser($data){
$sani_username = Sanitiesss($data['username']);
$sani_password = Sanitiesss($data['password']);

		$dat = $this->db->get_where('user_login',array('username'=>$data['oldusername']))->result();
	
		if (empty($dat)) { 
			return 'Invalid Username';
		}else{
			if($sani_password == $dat[0]->adm_password){
				return $dat;
			}else{
				return 'invalid password';
			}

		}
	}

	public function updt_oldpass($data){
$sani_username = Sanitiesss($data['username']);
$sani_password = Sanitiesss($data['password']);

		$dat = $this->db->get_where('user_login',array('username'=>$sani_username))->result();
	
		if (empty($dat)) { 
			return 'Invalid Username';
		}else{
			if($sani_password == $dat[0]->adm_password){
				return $dat;
			}else{
				return 'invalid password';
			}

		}
	}
}

?>