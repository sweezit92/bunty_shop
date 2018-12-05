<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_sub_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_view_category_m');
		$data['get_cat'] = $this->admin_view_category_m->get_cat();
		$this->load->view('admin_add_sub_category',$data);
	}

	public function add_sub_cat()
	{
		$this->load->model('admin_add_sub_category_m');
		$cat_id = $this->input->post('cat_id');
		$sub_cat = $this->input->post('sub_cat');
		$date = time();

		$check_duplicate = $this->admin_add_sub_category_m->check_duplicate($cat_id,$sub_cat);
		if($check_duplicate < 1){
			$insert_array = array('category_id' => $cat_id,'sub_category_name' => $sub_cat,'sub_category_date' => $date);
			$insert_query = $this->admin_add_sub_category_m->insert_query($insert_array);
			$this->session->set_flashdata("success", "Sub-category inserted successfully!");
	        redirect('admin_add_sub_category');
		}else{
			$this->session->set_flashdata("failed", "Sub-category already exist!");
	        redirect('admin_add_sub_category');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */