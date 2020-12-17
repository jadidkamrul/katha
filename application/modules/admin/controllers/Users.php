<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
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
		$where = array(
				'user_status !='=> 'pending',
			);
		$data['users']=$this->prime_model->get_data('users','',$where);
		$this->load->view('common/header');
		$this->load->view('users',$data);
		$this->load->view('common/footer');
	}


	public function add_user()
	{
		$this->load->view('common/header');
		$this->load->view('add_user');
		$this->load->view('common/footer');
	}

	
	public function add() {
		
	$this->load->model('prime_model');
	if(!empty($_FILES['userfile']['name']))
  	 {
       //$img1=$_FILES['userfile']['name'];
  		$config['upload_path'] = 'assets/uploads';
  		$config['allowed_types'] = 'gif|jpg|png';
  		$config['max_size'] = '1024';
 
  		$config['max_width']  = '1024';
  		$config['max_height']  = '768';
        $config['overwrite'] = false;
  		 $config['encrypt_name'] = TRUE;
      //  $config['file_name']  = $img1;
  		 $this->load->library('upload', $config);
  		 if ( ! $this->upload->do_upload())
  		 {
  				 $error = array('error' => $this->upload->display_errors());
  		 }
  		 else
  		 {

  		 	$username = $this->input->post('username');
			$password = $this->input->post('password');
			$confirm = $this->input->post('confirm-password');
			$email = $this->input->post('email');
			$data = array('upload_data' => $this->upload->data());
			$image=$data['upload_data']['file_name'];
			$additional_data = array(
					'user_image' => $image,
					'date_of_birth' => $this->input->post('date_of_birth'),
				 	'gender' => $this->input->post('gender'),
				 	'user_details' => $this->input->post('user_details'),
				 	'phone' => $this->input->post('phone'),
				 	'user_address' => $this->input->post('user_address')
						
						);
			if( $password == $confirm)
			{
				$group = array($this->input->post('group'));
				if (!$this->ion_auth->email_check($email))
				{
					$registered = $this->ion_auth->register($username, $password, $email,$additional_data, $group);
					if($registered ){

					$this->session->set_flashdata('successmsg','Users Add Successfully');
					redirect('admin/Users/add_user');

					}
				}
				else {
					$this->session->set_flashdata('error','User Email Already Used');
					redirect('admin/Users/add_user');
				}
			}
			else {
				$this->session->set_flashdata('error','Password Dosent Matched');
				redirect('admin/Users/add_user');
			}

  		}
  	}
	redirect('admin/users/add_user');
}


	public function edit(){

		$where=array('id' => $this->uri->segment(4));
		$this->load->model('prime_model');
		$data['users']=$this->prime_model->get_data('users','',$where);
		$this->load->view('common/header');
		$this->load->view('edit_users',$data);
		$this->load->view('common/footer');
	}



	public function editUser()
			{
				$this->load->model('prime_model');
				if(!empty($_FILES['userfile']['name']))
		  	 {
		       //$img1=$_FILES['userfile']['name'];
		  		 $config['upload_path'] = 'assets/uploads';
		  		 $config['allowed_types'] = 'gif|jpg|png';
		  		 $config['max_size'] = '1024';
		  		 $config['max_width']  = '1024';
		  		 $config['max_height']  = '768';
		         $config['overwrite'] = false;
		  		 $config['encrypt_name'] = TRUE;
		      //  $config['file_name']  = $img1;
		  		 $this->load->library('upload', $config);
		  		 if ( ! $this->upload->do_upload())
		  		 {
		  			$error = array('error' => $this->upload->display_errors());
		  		 }
		  		 else
		  		 {
						 $where=array('id' => $this->input->post('id'));
		  				 $data = array('upload_data' => $this->upload->data());
		  				 $image=$data['upload_data']['file_name'];
						 $data=array('username' => $this->input->post('username'),
		 							 'date_of_birth' => $this->input->post('sku'),
								 	 'gender' => $this->input->post('gender'),
								 	 'user_image' => $image,
								 	 'user_details' => $this->input->post('user_details'),
								 	 'email' => $this->input->post('email'),
								 	 'user_address' => $this->input->post('user_address'),
								 	 'phone' => $this->input->post('phone'));
		  				$userupdate = $this->prime_model->updater('users',$where,$data);
		  				 if( $userupdate > 0 ){
	  				$this->session->set_flashdata('successmsg','Product Update Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Product not Upload');
	  			}
	  			redirect('admin/Users/add_user');
		  		 }
		  	 }

				 else
				 {
					 	$where=array('id' => $this->input->post('id'));
						 $data=array('username' => $this->input->post('username'),
												 'date_of_birth' => $this->input->post('date_of_birth'),
												 'gender' => $this->input->post('gender'),
												 'user_details' => $this->input->post('user_details'),
												 'email' => $this->input->post('email'),
												 'phone' => $this->input->post('phone'));
						$userupdate = $this->prime_model->updater('users',$where,$data);
	 				if( $userupdate > 0 ){
		  				$this->session->set_flashdata('successmsg','Product Add Successfully');
		  			}else{
		  				$this->session->set_flashdata('errormsg','Product not Upload');
		  			}

				 }

				 redirect('admin/users/add_user');
			}


			public function delete()
			{
				$this->load->model('prime_model');
				$where=array('id' => $this->uri->segment(4));
				$this->prime_model->deleter('users',$where);
				redirect('admin/users');
			}


			public function pendingUser()
			{
				$this->load->model('prime_model');
				$where = array(
						'user_status' =>'pending',
					);
				$data['pendingUser']=$this->prime_model->get_data('users','',$where);
				$this->load->view('common/header');
				$this->load->view('pendingUser',$data);
				$this->load->view('common/footer');
			}

			public function useractive($id){

				$this->load->model('prime_model');
				$where = array(
						'id' => $id,
					);
				$data = array(
						'user_status' => 'active'
					);
 				$this->prime_model->updater('users',$where,$data);
 				redirect('admin/users');
			}

			public function suspend($id){
				$this->load->model('prime_model');
				$where = array(
						'id' => $id,
					);
			

				$data = array(
						'user_status' => 'suspend',
					);


				$this->prime_model->updater('users', $where, $data);
				redirect('admin/users');
			}
}
