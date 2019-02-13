<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details extends CI_Controller {

	public function index()
	{
		$this->load->model('product_details_m');
		$pro_id = $this->uri->segment(2);
		$data['fetch_pro_one_image'] = $this->product_details_m->fetch_pro_one_image($pro_id);
		$data['fetch_pro_data'] = $this->product_details_m->fetch_productzz($pro_id);
		$category_id = $data['fetch_pro_one_image']->cat_id;
		$data['fetch_related_data'] = $this->product_details_m->fetch_related_data($category_id);
		$this->load->view('product_details',$data);
	}

	public function check_availability(){
		$this->load->model('product_details_m');
		$pro_id = $this->uri->segment(3);
		$entered_pincode = $this->input->post('pincode');
		$fetch_pincode = $this->product_details_m->fetch_pincodes($pro_id);
		$explode_pins = explode(",",$fetch_pincode->pincodes);;
		if(in_array($entered_pincode,$explode_pins)){
			$this->session->set_flashdata("success", "Product is available for this pincode!");
		}else{
			$this->session->set_flashdata("failed", "Product is not available for this pincode!");
		}
		redirect('product_details/'.$pro_id.'');
	}

	public function send_email(){

		$this->load->model('product_details_m');
		$this->load->library('Emailtemplate');
		$pro_id = $this->uri->segment(3);
		$name = $this->input->post('full_name');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$product_details = $this->product_details_m->fetch_pro_one_image($pro_id);
		$product_name = $product_details->product_name;

		$email_text = $this->emailtemplate->contact_request($name,$mobile,$email,$message,$product_name);
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from('sales@vujubaba.com', 'Vujubaba');
		$this->email->to('debashisnath1992@gmail.com'); 
		$this->email->subject('Vujubaba Customer Contact Request');
		$this->email->message($email_text);    
		$okay = $this->email->send();

		$this->session->set_flashdata("success", "Thank you for reaching to us. We will get back to you soon.");
		redirect('product_details/'.$pro_id.'');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */