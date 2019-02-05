<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index()
	{
		$this->load->model('contact_m');
		if(isset($this->session->userdata['logged_in']['role']) && $this->session->userdata['logged_in']['role'] == 'user'){
			$user_id = $this->session->userdata['logged_in']['user_id'];
			$data['get_details'] = $this->contact_m->get_details($user_id);
			$this->load->view('contact',$data);
		}else{
			$this->load->view('contact');
		}
	}

	public function send_mail()
	{
		$this->load->library('Emailtemplate');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$email_text = $this->emailtemplate->contact_email($name,$email,$subject,$message);
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from('sales@vujubaba.com', 'Vujubaba');
		$this->email->to('sweezit92@gmail.com'); 
		$this->email->subject('Vujubaba Customer Enquiry');
		$this->email->message($email_text);    
		$okay = $this->email->send();

		$this->session->set_flashdata("success", "Thank you for reaching to us. We will check your feedback and get back to you soon.");
		redirect('contact');
	}
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */