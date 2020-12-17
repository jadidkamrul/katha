<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
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

	public function allorder()
	{
		
		$user = $this->ion_auth->user()->row();
		$id=$user->id;
		
		$where=array('o_status' => 'processing',
					 'user_id'  => $id
						);
		$this->load->model('prime_model');
		$data['seller_orders']=$this->prime_model->ordersData('orders','',$where);
	/*	echo '<pre>';
		print_r($data['seller_orders']);*/
		// die;
		$this->load->view('common/header');
		$this->load->view('all_orders',$data);
		$this->load->view('common/footer');
	}
}
