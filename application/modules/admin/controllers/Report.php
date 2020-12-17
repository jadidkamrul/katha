<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->model('prime_model');
		if(!$this->ion_auth->logged_in()){
			redirect('login');
		}
	}
	
	public function index(){

		$this->load->model('prime_model');
		$this->load->view('common/header');
		$this->load->view('report');
		$this->load->view('common/footer');
	}

	public function view(){
		$this->load->model('prime_model');
		$from_date =  $this->input->post('from_date');
		$to_date   =  $this->input->post('to_date');
		$where=array('date >=' => $from_date, 'date <=' => $to_date);
		$data['reports'] = $this->prime_model->get_report_data('orders',$where);
		
		$this->load->view('common/header');
		$this->load->view('report',$data);
		$this->load->view('common/footer');

		
	}


}
