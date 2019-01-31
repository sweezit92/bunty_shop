<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if($this->session->userdata['logged_in']['role'] != 'admin'){
            redirect('home');
        }
    }

	public function index()
	{
		$this->load->model('admin_view_product_m');
		$data['get_products'] = $this->admin_view_product_m->get_products();
		$this->load->view('test', $data);
	}

	public function delete_product()
	{
		$this->load->model('admin_view_product_m');
		$product_id = $this->uri->segment(3);
		$get_images = $this->admin_view_product_m->get_all_images($product_id);
		/*foreach($get_images as $fetch_images){
			echo $fetch_images->image_name;
			echo "<br/>";
		}*/

		$delete_query = $this->admin_view_product_m->delete_query($product_id,$get_images);
		$this->session->set_flashdata("success", "Product deleted successfully!");
	    redirect('test');
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */