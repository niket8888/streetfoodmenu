<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {   
		parent::__construct();  
		if (!$this->session->userdata('user') && !$this->session->userdata('user_time')) { 
			redirect('login');exit;   
		} 
function Sanitiesss($a){ $a = stripcslashes($a); return htmlspecialchars($a);}
	}

	public function index()
	{ 
		$data['item'] = $this->am->select('item');
		$data['category'] = $this->am->select('category');
		$data['how_started'] = $this->am->select('how_started');
		$data['menu_special'] = $this->am->select('menu_special');

		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}

	public function Menu_special_image()
	{
			$file_name    =  $_FILES['menu_special_image']['name'];
			$file_tem_loc =  $_FILES['menu_special_image']['tmp_name'];
			$path = "./assets/img/";
			$photo = 'assets/img/'.$this->am->upload_file($file_name, $file_tem_loc, $path);
			$img_name = array('menu_special_img' => $photo);
			$this->am->updateonly('menu_special', $img_name, 'menu_special_id', 1);
			unlink($_POST['menu_special_image_remove']);		
			redirect('home');	
	}

	public function How_started_img()
	{
			$file_name    =  $_FILES['your_story_img']['name'];
			$file_tem_loc =  $_FILES['your_story_img']['tmp_name'];
			$path = "./assets/img/";
			$photo = 'assets/img/'.$this->am->upload_file($file_name, $file_tem_loc, $path);
			$img_name = array('how_started_img' => $photo);
			
			$this->am->updateonly('how_started', $img_name, 'how_started_id', 1);
			unlink($_POST['how_started_img_remove']);		
			redirect('home');	
	}

	public function Title123()
	{
		$this->form_validation->set_rules('title1', 'Title', 'trim|xss_clean');
		$this->form_validation->set_rules('title2', 'Title2', 'trim|xss_clean');
	    $this->form_validation->set_rules('title3', 'Title3', 'trim|xss_clean');

		$title1 = $_POST['title1'];
		$title2 = $_POST['title2'];
	    $title3 = $_POST['title3'];	    
		    if ($this->form_validation->run()==TRUE) {
$this->am->updateonly('title123', $_POST, 'title_id', 1);
		    redirect(base_url('home'));
		    }

	}

	public function How_started()
	{
		$this->form_validation->set_rules('how_started1', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started2_mother', 'msg', 'trim|xss_clean');
  	    $this->form_validation->set_rules('how_started1_date', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started1_name', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started1_resn', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started1_efforts', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started1A', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started1B', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started1C', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('how_started1D', 'msg', 'trim|xss_clean');
$how_started2_mother = $_POST['how_started2_mother'];
$how_started1_date = $_POST['how_started1_date'];
$how_started1_name = $_POST['how_started1_name'];
$how_started1_resn = $_POST['how_started1_resn'];
$how_started1_efforts = $_POST['how_started1_efforts'];
$how_started1A = $_POST['how_started1A'];
$how_started1B = $_POST['how_started1B'];
$how_started1C = $_POST['how_started1C'];
$how_started1D = $_POST['how_started1D'];
		    if ($this->form_validation->run()==TRUE) {
		    	// echo "<pre>";print_r($_POST);
$this->am->updateonly('how_started', $_POST, 'how_started_id', 1);
		    redirect(base_url('home'));
		    }
	}

	public function Menu_special()
	{
		$this->form_validation->set_rules('menu_special', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('menu_special_name', 'msg', 'trim|xss_clean');
  	    $this->form_validation->set_rules('menu_special_description1', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('menu_special_description2', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('menu_special_description3', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('menu_price_single', 'msg', 'trim|xss_clean');
$menu_special_name = $_POST['menu_special_name'];
$menu_special_description1 = $_POST['menu_special_description1'];
$menu_special_description2 = $_POST['menu_special_description2'];
$menu_special_description3 = $_POST['menu_special_description3'];
$menu_price_single = $_POST['menu_price_single'];

		    if ($this->form_validation->run()==TRUE) {
$this->am->updateonly('menu_special', $_POST, 'menu_special_id', 1);
		    redirect(base_url('home'));
		    }
	}

	public function menu_list()
	{
		$this->form_validation->set_rules('menu_list1', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('menu_list2', 'msg', 'trim|xss_clean');
  	    $this->form_validation->set_rules('menu_list3', 'msg', 'trim|xss_clean');
$menu_list1 = $_POST['menu_list1'];
$menu_list2 = $_POST['menu_list2'];
$menu_list3 = $_POST['menu_list3'];	
		    if ($this->form_validation->run()==TRUE) {
$this->am->updateonly('menu_list', $_POST, 'menu_list_id', 1);
redirect(base_url('home'));
		    }
	}

	public function Address()
	{
		$this->form_validation->set_rules('address1', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('address2', 'msg', 'trim|xss_clean');
  	    $this->form_validation->set_rules('phone', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('opening1', 'msg', 'trim|xss_clean');
	    $this->form_validation->set_rules('opening2', 'msg', 'trim|xss_clean');
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$phone = $_POST['phone'];
$opening1 = $_POST['opening1'];
$opening2 = $_POST['opening2'];		    
		    if ($this->form_validation->run()==TRUE) {
$this->am->updateonly('address', $_POST, 'address_id', 1);
redirect(base_url('home'));
		    }
	}

}
