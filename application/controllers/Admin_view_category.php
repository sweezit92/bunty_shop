<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_view_category_m');
		$data['get_cat'] = $this->admin_view_category_m->get_cat();
		$this->load->view('admin_view_category',$data);
	}

	public function delete_cat()
	{
		$this->load->model('admin_view_category_m');
		$cat_id = $this->uri->segment(3);
		$delete_query = $this->admin_view_category_m->delete_query($cat_id);
		$this->session->set_flashdata("success", "Category deleted successfully!");
	    redirect('admin_view_category');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */