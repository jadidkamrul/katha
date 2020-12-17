<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->library('ion_auth');
		if($this->ion_auth->logged_in())
		{
			redirect('admin/dashboard');
		}
    }

	public function index()
	{
		$username = $this->input->post('name');
		$password = $this->input->post('password');
		$confirm = $this->input->post('confirm-password');
		$email = $this->input->post('email');
		if( $password == $confirm)
		{
			$additional_data = array(

				'user_status' => 'pending',
				);
			$group = array(3);
			if (!$this->ion_auth->email_check($email))
			{
				$registered=$this->ion_auth->register($username, $password, $email, $additional_data, $group);
				redirect('login');
			}
			else {
				$this->session->set_flashdata('error','User Already Exists');
				redirect('login');
			}
		}
		else {
			$this->session->set_flashdata('error','Password Dosent Matched');
			redirect('login');
		}

	}

	public function sellerAdd(){

			$this->load->library('ion_auth');
			$this->load->model('prime_model');
		  	{
				 $username = $this->input->post('username');
				 $password = $this->input->post('password');
				 $confirm = $this->input->post('confirm-password');
				 $email = $this->input->post('email');
				 if( $password == $confirm)
				{

					$additional_data = array(
						'user_status' => 'pending',
					);
					$group = array(2);
					if (!$this->ion_auth->email_check($email))
					{
						$registered=$this->ion_auth->register($username, $password, $email,$additional_data, $group);
						if($registered ){
						$this->session->set_flashdata('successmsg','Seller Regiesterd Successfully');
						redirect('login');
						}
					}
					else {
						$this->session->set_flashdata('error','User Email Already Used');
						redirect('login');
					}
				}
				else{
					$this->session->set_flashdata('error','Password Dosent Matched');
					redirect('login');
				}
			}
		}

		public function designerAdd(){

			$this->load->library('ion_auth');
			$this->load->model('prime_model');
		  	{
				  $username = $this->input->post('username');
				  $password = $this->input->post('password');
				  $confirm = $this->input->post('confirm-password');

				 $email = $this->input->post('email');
				 if( $password == $confirm)
				{

					$additional_data = array(
						'user_status' => 'pending',
					);
					$group = array(3);
					if (!$this->ion_auth->email_check($email))
					{
						$registered=$this->ion_auth->register($username, $password, $email,$additional_data, $group);
						if($registered ){
						$this->session->set_flashdata('successmsg','Designer Registerd Successfully');
						redirect('login');
						}
					}
					else {
						$this->session->set_flashdata('error','User Email Already Used');
						redirect('login');
					}
				}
				else{
					$this->session->set_flashdata('error','Password Dosent Matched');
					redirect('login');
				}
			}
		}

		
}
