<?php 

defined('BASEPATH') OR exit('No Direct Script Allowed');

	class Order Extends CI_Controller{

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
		$where = array('o_status' => 'active',);
		$data['orders'] = $this->prime_model->ordersData('orders','',$where);
		$this->load->view('common/header');
		$this->load->view('all_orders',$data);
		$this->load->view('common/footer');

	}

	public function ordersprocess($o_id){

		$this->load->model('prime_model');

		$where = array('o_id'   => $o_id );
		$data  = array('o_status' =>'processing' );
		$process = $this->prime_model->updater('orders',$where,$data);
		if($process > 0){
	  				$this->session->set_flashdata('successmsg','order shift process list Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Product not Upload');
	  			}
		redirect('admin/order');

	}

	public function ordersactive($o_id){

		$this->load->model('prime_model');

		$where = array('o_id'   => $o_id );
		$data  = array('o_status' =>'processing' );
		$this->prime_model->updater('orders',$where,$data);
		redirect('admin/order/index');

	}


	public function cancel($o_id){

		$this->load->model('prime_model');
		$where = array('o_id' => $o_id);
		$data  = array('o_status' => 'cancel');
		$cancel = $this->prime_model->updater('orders',$where,$data);
		
		if($cancel > 0){
			$this->session->set_flashdata('successmsg','order shift cancel list Successfully');
		}else{
			$this->session->set_flashdata('errormsg','Product not Upload');
		}
		redirect('admin/order');

	}


	public function cancellist(){

		$this->load->model('prime_model');
		$where = array('o_status' => 'cancel',);
		$data['cancelorder'] = $this->prime_model->ordersData('orders','',$where);
		$this->load->view('common/header');
		$this->load->view('cancel_list',$data);
		$this->load->view('common/footer');

	}

		public function processlist(){

		$this->load->model('prime_model');
		$where = array('o_status' => 'processing',);
		$data['processingorder'] = $this->prime_model->ordersData('orders','',$where);
		$this->load->view('common/header');
		$this->load->view('processing_list',$data);
		$this->load->view('common/footer');

	}

	public function designorder(){

		$this->load->model('prime_model');
		$data['designorderdata'] = $this->prime_model->get_data('customorder');
		$this->load->view('common/header');
		$this->load->view('designorderlist',$data);
		$this->load->view('common/footer');
	}
}

?>