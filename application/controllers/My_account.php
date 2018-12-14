<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account extends CI_Controller {

	function __construct(){
        parent::__construct();
        if($this->session->userdata['logged_in']['role'] != 'user'){
            redirect('home');
        }
    }

	public function index()
	{
		$this->load->model('my_account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_details'] = $this->my_account_m->fetch_details($user_id); 
		$this->load->view('my_account',$data);
	}

	public function update_details()
	{
		$this->load->model('my_account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$check_duplicate = $this->my_account_m->check_duplicate($email,$user_id);
		if(sizeof($check_duplicate) < 1)
		{
			$update_array = array(
									'first_name' => $first_name,
									'last_name' => $last_name,
									'email'=> $email,
									'phone' => $phone,
									'password' => $pass,
								 );
			$update_query = $this->my_account_m->update_query($update_array,$user_id);
			$this->session->set_flashdata("success", "Profile updated successfully!");
			redirect('my_account');
		}else{
			$this->session->set_flashdata("failed", "This email already exist!");
			redirect('my_account');
		}
	}

}

/* End of file My_account.php */
/* Location: ./application/controllers/My_account.php */