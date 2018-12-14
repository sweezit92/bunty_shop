<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function register()
	{
		$this->load->model('home_m');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$date = time();

		$check_duplicate = $this->home_m->check_duplicate($email);
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
			$insert_query = $this->home_m->insert_query($insert_array);
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
			redirect('home');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */