<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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

	public function index()
	{
    $this->load->model('prime_model');
    $limit = 10;
    $where = array('o_status' => 'active',);

    $data['orders'] = $this->prime_model->ordersData('orders','',$where, $limit);

		$this->load->view('common/header');
		$this->load->view('dashboard',$data);
		$this->load->view('common/footer');
	}
}
