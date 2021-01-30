<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
	public function Index() 
	{ 
		// echo "Bed kas method";
		$data['title123'] = $this->am->select('title123');
		$data['menu_special'] = $this->am->select('menu_special');
		$data['menu_list'] = $this->am->select('menu_list');
		$data['how_started'] = $this->am->select('how_started');
		$data['address'] = $this->am->select('address');
		$data['category'] = $this->am->select('category');
		$data['item'] = $this->am->select('item');
		
		$this->load->view('index', $data);
	} 
	
	public function Item_detail($item_id)
	{
		$data['item_detail'] = $this->am->select_where('item', 'item_id', $item_id);
		$this->load->view('item_detail', $data);	
	}

	public function Msg()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|xss_clean');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'trim|xss_clean');
  	    $this->form_validation->set_rules('msg', 'msg', 'trim|xss_clean');
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$msg = $_POST['msg'];	
		    if ($this->form_validation->run()==TRUE) {
			$this->am->insertonly('contact', $_POST);
			redirect(base_url());
		    }
	}
}
 