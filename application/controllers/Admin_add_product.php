<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_view_category_m');
		$data['get_cat'] = $this->admin_view_category_m->get_cat();
		$this->load->view('admin_add_product',$data);
	}

	public function insert_product()
	{
		$this->load->model('admin_add_product_m');
		$cat_id = $this->input->post('cat_id');
		$product_name = $this->input->post('product_name');
		$product_price = $this->input->post('product_price');
		$product_desc = $this->input->post('desc');
		
		$date = time();
		
		$check_duplicate = $this->admin_add_product_m->check_duplicate($cat_id,$product_name);
		if($check_duplicate < 1)
		{
			$insert_array = array('cat_id' => $cat_id,'product_name' => $product_name,'product_price' => $product_price,'product_desc' => $product_desc,'product_date' => $date);
			$insert_id = $this->admin_add_product_m->insert_query($insert_array);
			if($insert_id != '')
			{
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
					$img_data = array('cat_id'=>$cat_id,'product_id'=>$insert_id,'image_name'=>$dataInfo[$i]['file_name'],'image_date'=>$date);
					$insert_img = $this->admin_add_product_m->img_add($img_data);
				}
				$this->session->set_flashdata("success", "Product inserted successfully!");
				redirect('admin_add_product');
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('admin_add_product');
			}
		}else{
			$this->session->set_flashdata("duplicate", "Product already exist!");
	        redirect('admin_add_product');
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

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */