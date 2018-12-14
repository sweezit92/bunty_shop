<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_category extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if($this->session->userdata['logged_in']['role'] != 'admin'){
            redirect('home');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_category');
	}

	public function add_category()
	{
		$this->load->model('admin_add_category_m');
		$cat_name = $this->input->post('cat_name');
		$date = time();
		if(!empty($_FILES['image']['name'])){
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$image = $uploadData['file_name'];
			}else{
				$image = '';		
			}
		}else{
			$image = '';		
		}
		
		$check_duplicate = $this->admin_add_category_m->check_duplicate($cat_name);
		if($check_duplicate < 1)
		{
			$insert_array = array('category_name' => $cat_name,'category_image' => $image,'category_date' => $date);
			$insert_query = $this->admin_add_category_m->insert_query($insert_array);
			$this->session->set_flashdata("success", "Category inserted successfully!");
	        redirect('admin_add_category');
		}else{
			$this->session->set_flashdata("failed", "Category already exist!");
	        redirect('admin_add_category');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */