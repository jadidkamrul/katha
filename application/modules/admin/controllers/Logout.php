<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
								$this->load->library('ion_auth');
				// if($this->ion_auth->logged_in())
				// {
				// 	redirect('admin/dashboard');
				// }
        }
	public function index()
	    {
				$logged_out=$this->ion_auth->logout();
				if($logged_out)
				{
					redirect('admin/login');
				}
				else {
					redirect('admin/dashboard');
				}
	    }

}
