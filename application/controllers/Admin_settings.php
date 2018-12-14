<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_settings extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if($this->session->userdata['logged_in']['role'] != 'admin'){
            redirect('home');
        }
    }

	public function index()
	{
		$this->load->model('admin_settings_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_details'] = $this->admin_settings_m->fetch_details($user_id);
		$this->load->view('admin_settings',$data);
	}

	public function update_password()
	{
		$this->load->model('admin_settings_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$password = $this->input->post('password');
		$records = array('password'=>$password);
		$update_query = $this->admin_settings_m->update_query($records,$user_id);
		$this->session->set_flashdata("success", "Password updated successfully!");
	    redirect('admin_settings');
	}

}

/* End of file Admin_settings.php */
/* Location: ./application/controllers/Admin_settings.php */