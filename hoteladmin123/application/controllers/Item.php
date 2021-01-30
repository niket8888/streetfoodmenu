<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

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
		
        $this->load->view('Header');
		$this->load->view('New_item', $data);
		$this->load->view('Footer');
	}

	public function Exist()
	{
		$data['item'] = $this->am->select('item');
		$data['category'] = $this->am->select('category');
		$data['exits'] = "Category Already Exist";
		$this->load->view('Header');
		$this->load->view('new_item', $data);
		$this->load->view('Footer');
	}

	public function Added()
	{
		$data['item'] = $this->am->select('item');
		$data['category'] = $this->am->select('category');
		$data['added'] = "Category Added Successfuly";
		$this->load->view('Header');
		$this->load->view('new_item', $data);
		$this->load->view('Footer');
	}

	public function ItemR($w)
	{
		$data['item'] = $this->am->select('item');
		$data['category'] = $this->am->select('category');
	if ($w == "a") {
		$data['item_added'] = "Item Added Successfuly";
	} elseif ($w == "e") {
		$data['item_exist'] = "Item Exist Already";
	}
		$this->load->view('Header');
		$this->load->view('new_item', $data);
		$this->load->view('Footer');
	}

	public function Insert_item()
	{
		$this->form_validation->set_rules('category_id', 'Title', 'trim|xss_clean');
		$this->form_validation->set_rules('item_name', 'item_name', 'trim|xss_clean');
	    $this->form_validation->set_rules('item_price', 'item_price', 'trim|xss_clean');
	    $this->form_validation->set_rules('item_description', 'item_description', 'trim|xss_clean');
	 
		$category_id = $_POST['category_id'];
		$item_name = $_POST['item_name'];
	    $item_price = $_POST['item_price'];
	    $item_description = $_POST['item_description'];

		if ($this->form_validation->run()==TRUE) {
		$itm_nm = $this->am->select_where('item', 'item_name', $_POST['item_name']);
		if (empty($itm_nm)) {
		
$file_name    =  $_FILES['item_image']['name'];
			$file_tem_loc =  $_FILES['item_image']['tmp_name'];
			$path = "./assets/img/";
			$photo = 'assets/img/'.$this->am->upload_file($file_name, $file_tem_loc, $path);
			$item_info = array('item_image' => $photo, 'category_id' => $_POST['category_id'], 'item_name' => $_POST['item_name'], 'item_price' => $_POST['item_price'], 'item_description' => $_POST['item_description']);

		$this->am->insertonly('item', $item_info);
		redirect(base_url('item/itemR/a'));
		} else {
		redirect(base_url('item/itemR/e'));
		}

		}
	}

	public function Delete($del_item_id)
	{
	$this->am->delete('item', 'item_id', $del_item_id);
	$data['item_deleted'] = 'Item Deleted Successfuly';
	$remove_img = $assets."/".$img."/".$no;
	unlink($_GET['itmimg']);	
	redirect(base_url());
	}

	public function Add_category()
	{
	$this->form_validation->set_rules('category', 'Category', 'trim|xss_clean');
	$category = $_POST['category_name'];
		if ($this->form_validation->run()==TRUE) {
	$catgry = $this->am->select_where('category', 'category_name', $_POST['category_name']);
	if (empty($catgry)) {
	$this->am->insertonly('category', $_POST);
	redirect(base_url('item/added'));
	} else {
	redirect(base_url('item/exist'));
	}
	    }
	}

}
