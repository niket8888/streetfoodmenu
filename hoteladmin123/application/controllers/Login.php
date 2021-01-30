<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {   
		parent::__construct();  
		if ($this->session->userdata('user') && $this->session->userdata('user_time')) { 
			redirect('Home');exit;   
		} 
		$this->load->library('encryption');
	function Sanitiesss($a){ $a = stripcslashes($a); return htmlspecialchars($a);}
	}
	
	public function Index()
	{
		// echo $this->encryption->encrypt('niket');
		$this->load->view('login');
	}

	public function Resetpass_page()
	{
		$this->load->view('Resetpass');
	}

	public function Resetpass()
	{
		$this->form_validation->set_rules('user_name', 'User Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('old_password', 'Old Password', 'required|trim|xss_clean');
		$this->form_validation->set_rules('new_password', 'New Password', 'required|trim|xss_clean');
		if ($this->form_validation->run()==TRUE) {
			$find_user = $this->am->select_where('login', 'user_name', $_POST['user_name']);
			if (!empty($find_user)) {
				$decryptpasssword = $this->encryption->decrypt($find_user[0]->user_password);
				if ($decryptpasssword == $_POST['old_password']) {
					$newDecrypt = $this->encryption->encrypt($_POST['new_password']);
					$passRess = array('user_password' => $newDecrypt);
					$this->am->updateonly('login', $passRess, 'login_id', 1);
					redirect('home');exit; 
				}else{ 
					echo "Please Enter Correct Password";
					// $data['msg_e'] = 'Please Enter Correct Password';
					// redirect('home', $data);exit;
				}
			}else{ 
				echo 'Please Enter Correct Username';
				// $data['msg_e'] = 'Please Enter Correct Username';
				// redirect('home', $data);exit;
			}
		}else{
			echo 'Please Do Valid Entry';
			// $data['msg_e'] = 'Please Do Valid Entry';
			// redirect('home', $data);exit;
		}

	} 


	public function check_admin()
	{
		$this->form_validation->set_rules('user_name', 'User Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('user_password', 'User Password', 'required|trim|xss_clean');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('login');
		}else{
$dat = $this->db->get_where('login',array('user_name'=>$_POST['user_name']))->result();
			if (empty($dat)) {
				$data['msg'] = 'Please Enter Valid Username';
			 	$this->load->view('login', $data); 
			}else{ 
				$DBuser_password = $this->encryption->decrypt($dat[0]->user_password);
				if ($DBuser_password == $_POST['user_password']) {
				// $_SESSION['user']= $r[0]->username;  //OR
				$this->session->set_userdata('user',$dat[0]->user_name);
				$this->session->set_userdata('user_time', time());
				redirect('home');exit; 
				} else {
				$data['msg'] = 'Please Enter Valid Password';
			 	$this->load->view('login', $data);
				
				}
				
			}

		}

	}

}
