<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id'] && $this->session->userdata['logged_in']['role'] != 'admin'){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_product_m');
		$this->load->model('admin_view_category_m');
		$product_id = $this->uri->segment(2);
		$data['get_cat'] = $this->admin_view_category_m->get_cat();
		$data['fetch_product'] = $this->admin_edit_product_m->fetch_product($product_id);
		$this->load->view('admin_edit_product', $data);
	}

	public function ajax_delete_img()
	{
		$this->load->model('admin_edit_product_m');
		$image_id = $this->input->post('image_id');
		$image_name = $this->input->post('image_name');
		$delete_query = $this->admin_edit_product_m->delete_query($image_id,$image_name);
	}

	public function update_product()
	{
		$this->load->model('admin_edit_product_m');
		$this->load->model('admin_add_product_m');
		$product_id = $this->uri->segment(3);
		$cat_id = $this->input->post('cat_id');
		$product_name = $this->input->post('product_name');
		$product_price = $this->input->post('product_price');
		$product_desc = $this->input->post('desc');
		$date = time();
		
		
		$check_duplicate = $this->admin_edit_product_m->check_duplicate($cat_id,$product_name,$product_id);
		if($check_duplicate < 1)
		{
			$update_array = array('cat_id' => $cat_id,'product_name' => $product_name,'product_price' => $product_price,'product_desc' => $product_desc);
			$update_product = $this->admin_edit_product_m->update_query($update_array,$product_id);
			
			$this->load->library('upload');
			$dataInfo = array();
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for($i=0; $i<$cpt; $i++){           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				$this->upload->initialize($this->set_upload_options());
				$this->upload->do_upload();
				$dataInfo[] = $this->upload->data();
				$img_data = array('cat_id'=>$cat_id,'product_id'=>$product_id,'image_name'=>$dataInfo[$i]['file_name'],'image_date'=>$date);
				$insert_img = $this->admin_add_product_m->img_add($img_data);
			}
			$this->session->set_flashdata("success", "Product updated successfully!");
			redirect('admin_edit_product/'.$product_id);
			
		}else{
			$this->session->set_flashdata("duplicate", "Product already exist!");
	        redirect('admin_edit_product/'.$product_id);
		}
	}

	private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = 'uploads';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['file_name'] = rand(999,99999).$_FILES['userfile']['name'];
	    return $config;
	}

}

/* End of file Admin_edit_product.php */
/* Location: ./application/controllers/Admin_edit_product.php */