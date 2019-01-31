<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_category extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if($this->session->userdata['logged_in']['role'] != 'admin'){
            redirect('home');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_category_m');
		$cat_id = $this->uri->segment(2);
		$data['fetch_cat'] = $this->admin_edit_category_m->fetch_category($cat_id);
		$this->load->view('admin_edit_category',$data);
	}

	public function update_category()
	{
		$this->load->model('admin_edit_category_m');
		$cat_id = $this->uri->segment(3);
		$cat_name = $this->input->post('cat_name');
		
		
		$check_duplicate = $this->admin_edit_category_m->check_duplicate($cat_name,$cat_id);
		if($check_duplicate < 1)
		{
			if(!empty($_FILES['image']['name'])){
				$config['upload_path'] = 'uploads/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = rand(999,99999).$_FILES['image']['name'];
				
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('image')){
					$uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$img_name = $this->input->post('img_name');
					$update_array = array('category_name' => $cat_name,'category_image' => $image);
				}else{
					$img_name = '';
					$update_array = array('category_name' => $cat_name);
				}
			}else{
				$img_name = '';
				$update_array = array('category_name' => $cat_name);
			}
			$update_query = $this->admin_edit_category_m->update_query($update_array,$cat_id,$img_name);
			$this->session->set_flashdata("success", "Category updated successfully!");
	        redirect('admin_edit_category/'.$cat_id);
		}else{
			$this->session->set_flashdata("failed", "Category already exist!");
	        redirect('admin_edit_category/'.$cat_id);
		}
	}

}

/* End of file Admin_edit_category.php */
/* Location: ./application/controllers/Admin_edit_category.php */