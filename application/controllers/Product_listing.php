<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_listing extends CI_Controller {

	public function index()
	{
		$this->load->model('product_listing_m');
		$data['fetch_all_categories'] = $this->product_listing_m->fetch_categories();
		$cat_id = $this->uri->segment(2);
		$data['fetch_cat_name'] = $this->product_listing_m->fetch_category($cat_id);
		
		if($cat_id != ''){
			$category_id = $cat_id;
		}else{
			$category_id = "";
		}
		if(!empty($this->session->userdata['sort_by']['sort_by_option'])){
			$sorting_by = $this->session->userdata['sort_by']['sort_by_option'];
		}else{
			$sorting_by = "";
		}
		$data['category_id'] = $category_id;
		$data['max_price'] = $this->product_listing_m->fetch_max_price($category_id);
		

		if(!empty($this->session->userdata['price_range']['price'])){
			$under_price = intval($this->session->userdata['price_range']['price']);
		}else{
			$under_price = $data['max_price'];
		}
		$data['fetch_all_products'] = $this->product_listing_m->fetch_products($category_id,$under_price,$sorting_by);
		
		$this->load->view('product_listing',$data);
	}

	public function price_range(){
		$cat_id = $this->uri->segment(3);
		$max_price = $this->input->post('budgetzz');
		$price_session = array(
			'price' => $max_price,
		);
		$session_price_range = $this->session->set_userdata('price_range',$price_session);
		redirect('product_listing/'.$cat_id.'');
	}

	public function sort_by_func(){
		$cat_id = $this->uri->segment(3);
		$sort_by = $this->input->post('sort_by');
		$sorting_option = array(
			'sort_by_option' => $sort_by,
		);
		$session_price_range = $this->session->set_userdata('sort_by',$sorting_option);
		redirect('product_listing/'.$cat_id.'');
	}
}

/* End of file Product_listing.php */
/* Location: ./application/controllers/Product_listing.php */