<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_sub_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_view_sub_category_m');
		$data['get_sub_cat'] = $this->admin_view_sub_category_m->get_sub_cat();
		$this->load->view('admin_view_sub_category',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */