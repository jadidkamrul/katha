<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
				$this->load->library('ion_auth');
				if($this->ion_auth->is_admin())
				{
					redirect('admin/dashboard');
				}
        }

	public function index()
	{

		$this->load->view('login');
	}


	public function authentication()
	{

		$identity = $this->input->post('email');
		$password = $this->input->post('password');
		$remember = TRUE;
		$logged_in=$this->ion_auth->login($identity, $password, $remember);
		if($logged_in){
			$user = $this->ion_auth->user()->row();
			$user_groups = $this->ion_auth->get_users_groups($user->id)->result_array();
			if($user_groups[0]['name'] == 'admin') 
			{
			    redirect('admin/dashboard');	
			}
			else
			{
				redirect('admin/login');
			}
			
		}
		else 
		{
			redirect('admin/login');
		}
	}
}
