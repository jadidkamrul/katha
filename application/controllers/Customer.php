<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	

	public function Add()
	{
		$this->load->model('Home_model');
	  	//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('customeradd');
		$this->load->view('common/footer');
	}


	public function add_customer(){

		$this->load->model('Home_model');
		$this->load->library('cart');
	 	$cname = $this->input->post('cname');
	 	$cemail = $this->input->post('cemail');
	 	$cpass = $this->input->post('cpasword');
	 	$caddress = $this->input->post('caddress');
	 	$cphone = $this->input->post('cphone');
		$data=array(	
				'name' => $cname,
 				'email' => $cemail,
 				'password' => $cpass,
 				'address' => $caddress,
 				'phone' => $cphone
 		);
  		$datainsert = $this->Home_model->inserter('customers',$data);

  		if($datainsert){
			$result = $this->Home_model->customer_login_data_check();
			if($result){
            	$rows = count($this->cart->contents());
				if($rows>0){
					redirect('cart/checkout');
				}
				redirect('Customer/customerView');
			}
			else{
				redirect('Customer/add');
			}
		}
  	}


  	public function customeredit()
	{
		$this->load->model('Home_model');
	  	//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
 		$cs_id = $customer_data['current_user_id'];
 		$where= array('serial' => $cs_id );
 		$data['customer_edit_data']=$this->Home_model->get_data('customers','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('customeredit');
		$this->load->view('common/footer');
	}

	public function edit_customer(){
		$this->load->model('Home_model');
		$where =array('serial' => $this->input->post('id'));
		$data=array(
					'name' => $this->input->post('cname'),
					'email' => $this->input->post('cemail'),
					'address' => $this->input->post('caddress'),
					'phone' => $this->input->post('cphone')
				);

		$this->Home_model->updater('customers',$where,$data);
		redirect('Customer/customerView');

	}




  	public function CustomerLogin(){
  		$this->load->model('Home_model');
  	//for  showing wishlist data in header
	$customer_data = $this->session->userdata('customer_data');
	$c_id = $customer_data['current_user_id'];

	$c_id = $customer_data['current_user_id'];
	$c_id = $customer_data['current_user_id'];


	$where=array('c_id ' => $c_id);
		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('login');
		$this->load->view('common/footer');

  	}


	  	public function customer_login_data_check(){

	  		$this->load->library('form_validation');
			$this->load->library('cart');
	  		$this->form_validation->set_rules('cemail','cemail','trim|required');
	  		$this->form_validation->set_rules('cpasword','cpasword','trim|required');

	  		if($this->form_validation->run() == FALSE)
	  		{
		  		$this->load->view('common/header');
				$this->load->view('login');
				$this->load->view('common/footer');
	  		}else{

				$this->load->model('Home_model');
				$result = $this->Home_model->customer_login_data_check();

				if($result){
                	$rows = count($this->cart->contents());
					if($rows>0){
						redirect('cart/checkout');
					}

					redirect('Customer/customerView');
				}
				else{
					$data['errorLogin'] = 'user name or passwor is invailid';
					$this->load->view('login_page',$data);
				}
	  		}

	  	}


	  	public function customerView(){
	  		$this->load->model('Home_model');
	  	//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];

		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
	  		
	  			$this->load->view('common/header',$data);
				$this->load->view('customerprofile');
				$this->load->view('common/footer');
	  	}

	  	public function CustomerLogout(){

	  		$this->session->unset_userdata('current_user_id');
			$this->session->unset_userdata('current_customer_name');
			$this->session->unset_userdata('current_customer_email');
			$this->session->unset_userdata('current_customer_address');
			$this->session->unset_userdata('current_customer_phone');
			$this->session->sess_destroy();
			redirect('Home');
	  	}



	  	public function customer_orderlist(){

	  		$this->load->model('Home_model');
	  		
	  		$customer_data = $this->session->userdata('customer_data');
		    $c_id = $customer_data['current_user_id'];

		    $where=array('c_id ' => $c_id);
 			$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);


			$where=array('serial' => $c_id);
			$data['customer_orders'] = $this->Home_model->get_customer_order('orders','',$where);

	

	  		$this->load->view('common/header',$data);
			$this->load->view('customer_orderlist',$data);
			$this->load->view('common/footer');

	  	}

	  	

}
