<?php
	
	defined('BASEPATH') OR exit ('No Direct Script Allowed');

	class Customer Extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this->load->library('ion_auth');
			$this->load->model('prime_model');
			if(!$this->ion_auth->logged_in())
			{
				redirect('login');
			}

		}


		public function index(){

			$this->load->model('prime_model');
			$data['customers'] = $this->prime_model->get_data('customers');
		// 	echo '<pre>';
		// 	print_r($data['customers']);
		// 	die;
			$this->load->view('common/header');
			$this->load->view('all_customer',$data);
			$this->load->view('common/footer');

		}

		public function delete(){
			echo 'test';
		}


	} 

?>