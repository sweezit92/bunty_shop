<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details extends CI_Controller {

	public function index()
	{
		$this->load->model('product_details_m');
		$pro_id = $this->uri->segment(2);
		$data['fetch_pro_one_image'] = $this->product_details_m->fetch_pro_one_image($pro_id);
		$data['fetch_pro_data'] = $this->product_details_m->fetch_productzz($pro_id);

		$category_id = $data['fetch_pro_one_image']->cat_id;
		$data['fetch_related_data'] = $this->product_details_m->fetch_related_data($category_id);
		$this->load->view('product_details',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */