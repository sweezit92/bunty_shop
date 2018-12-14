<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}

	public function add_user()
	{
		$this->load->model('register_m');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$date = time();

		$check_duplicate = $this->register_m->check_duplicate($email);
		
		if(sizeof($check_duplicate) < 1)
		{
			$insert_array = array(
									'first_name' => $first_name,
									'last_name' => $last_name,
									'email'=> $email,
									'phone' => $phone,
									'password' => $pass,
									'role' => 'user'
								 );
			$insert_query = $this->register_m->insert_query($insert_array);
			$session_data = array(
									'user_id' => $insert_query,
									'name' => $first_name.' '.$last_name,
									'email'=> $email,
									'role' => 'user'
								 );
			$this->session->set_userdata('logged_in', $session_data);
			redirect('home');
		}else{
			$this->session->set_flashdata("failed", "This user already exist!");
			redirect('register');
		}
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */