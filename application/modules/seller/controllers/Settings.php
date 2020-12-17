<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
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
		
		$user = $this->ion_auth->user()->row();
	    $id=$user->id;
		$where=array('id' => $id);
		//$this->load->model('prime_model');
		$data['userinfo']=$this->prime_model->get_data('users','',$where);
		$this->load->view('common/header');
		$this->load->view('settings',$data);
		$this->load->view('common/footer');
	}
	
	public function userUpdate()
	{
	
	$this->load->model('prime_model');
	$user = $this->ion_auth->user()->row();
		$id=$user->id;

	if(!empty($_FILES['userfile']['name']))
  	 {
  	 	
        $img1=$_FILES['userfile']['name'];


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
			$where=array('id' => $id);
  			$data = array('upload_data' => $this->upload->data());
  			$image=$data['upload_data']['file_name'];
			$data=array(

				'username' => $this->input->post('username'),		
				'user_image' => $image,
				'phone' => $this->input->post('phone'));

  				$userUpdate = $this->prime_model->updater('users',$where,$data);
  				 if($userUpdate > 0){
	  				$this->session->set_flashdata('successmsg','User Data Update Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Product not Upload');
	  			}
	  			 redirect('seller/settings');
  		 }
  	 }

		 else
		 {


		 // 	$where=array('id' => $id);
			// $data=array('username' => $this->input->post('username'),
			// 			 'user_image' =>  $image,
			// 			 'phone' => $this->input->post('phone')
			// 			);
			// $this->prime_model->updater('users',$where,$data);
		 }
		 redirect('seller/settings');
	}

	



}
