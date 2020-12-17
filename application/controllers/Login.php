<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	

	public function selleradd()
	{
		$this->load->model('Home_model');
	  	//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('seller_register');
		$this->load->view('common/footer');
	}


	public function seller_add(){

		$this->load->library('ion_auth');
		$this->load->model('Home_model');
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
					redirect('login/sellerAdd');
					}
				}
				else {
					$this->session->set_flashdata('error','User Email Already Used');
					redirect('login/sellerAdd');
				}
			}
			else{
				$this->session->set_flashdata('error','Password Dosent Matched');
				redirect('login/sellerAdd');
			}
		}
	}

	public function sellerlogin(){

		$this->load->model('Home_model');
	  	//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('sellerlogin');
		$this->load->view('common/footer');
	}


public function designeradd()
	{
		$this->load->model('Home_model');
	  	//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('designer_register');
		$this->load->view('common/footer');
	}

	public function designer_add(){

		$this->load->library('ion_auth');
		$this->load->model('Home_model');
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
					$this->session->set_flashdata('successmsg','Designer Regiesterd Successfully');
					redirect('login/designerAdd');
					}
				}
				else {
					$this->session->set_flashdata('error','User Email Already Used');
					redirect('login/designerAdd');
				}
			}
			else{
				$this->session->set_flashdata('error','Password Dosent Matched');
				redirect('login/designerAdd');
			}
		}
	}

public function designerlogin(){

		$this->load->model('Home_model');
	  	//for  showing wishlist data in header
		$customer_data = $this->session->userdata('customer_data');
		$c_id = $customer_data['current_user_id'];
		$where=array('c_id ' => $c_id);
 		$data['wishdata'] = $this->Home_model->get_data('wishlist','',$where);
		$this->load->view('common/header',$data);
		$this->load->view('designerlogin');
		$this->load->view('common/footer');
	}

	

	  	

}
