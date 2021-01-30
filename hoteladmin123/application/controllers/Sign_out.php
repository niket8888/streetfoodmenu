<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_out extends  CI_Controller{
 
	// function __construct() {  
	// 	parent::__construct();  
	// 	if (!$this->session->userdata('login_id')) {
	// 		redirect('main/Loginregister');exit;   
	// 	} 
	// }  

	public function Index() {
	session_destroy();
	redirect();exit; 
	}
	

}