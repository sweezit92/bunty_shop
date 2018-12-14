<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login_check(){
		$this->load->model('login_m');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$check_login = $this->login_m->check_login($email,$password);
		if(sizeof($check_login) > 0){
			
			$session_data = array(
									'user_id' => $check_login->user_id,
									'name' => $check_login->first_name.' '.$check_login->last_name,
									'email'=> $check_login->email,
									'role' => $check_login->role
								 );
			$this->session->set_userdata('logged_in', $session_data);
			if($check_login->role == 'admin'){
				redirect('admin_add_category');
			}else{
				redirect('home');
			}
		}else{
			$this->session->set_flashdata("failed", "Invalid email or password");
			redirect('login');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */