<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designs extends CI_Controller {
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

	public function adddesigns(){
		$data['designcategory']=$this->prime_model->get_data('designcategory');
		$this->load->view('common/header');
		$this->load->view('adddesign',$data);
		$this->load->view('common/footer');

	}

	public function add_design(){
		$user = $this->ion_auth->user()->row();
		$id=$user->id;

		$this->load->model('prime_model');
	 	$designname = $this->input->post('designname');
	 	$designcat = $this->input->post('designcat');
	 	$price = $this->input->post('price');
	

		if(!empty($_FILES['userfile']['name']))
	  	  {

	  		 $config['upload_path'] = 'assets/uploads';
	  		 $config['allowed_types'] = 'gif|jpg|png';
	  		 $config['max_size'] = '1024';
	  		 $config['max_width']  = '2048';
	  		 $config['max_height']  = '2048';
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
	  			
  				$data = array('upload_data' => $this->upload->data());
  				$image=$data['upload_data']['file_name'];
				$data=array(	
								'title' => $designname,
								'd_category' => $designcat,
				 				'image' =>$image,
								'price' => $price,
								'user_id' => $id
				 			);

	  				$datainsert = $this->prime_model->inserter('designs',$data);
	  				if($datainsert > 0){
	  				$this->session->set_flashdata('successmsg','Design Add Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Design not Upload');
	  			}
	  		}
		}

	  	else{
	  				$this->session->set_flashdata('errormsg','Product not Upload');
	  			}

		 redirect('designer/Designs/adddesigns');


	}

	public function alldesigns(){
		$this->load->model('prime_model');
		$data['designs']=$this->prime_model->get_design_data();
		$this->load->view('common/header');
		$this->load->view('alldesigns',$data);
		$this->load->view('common/footer');
	}


	public function edit_design()
	{
		$where=array('dp_id' => $this->uri->segment(4));
		$this->load->model('prime_model');
		$data['designcategory']=$this->prime_model->get_data('designcategory');
		$data['designdata']=$this->prime_model->get_data('designs','',$where);
		$this->load->view('common/header');
		$this->load->view('design_catedit',$data);
		$this->load->view('common/footer');
	}

	public function edit_designdata()
	
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
		  		if( ! $this->upload->do_upload())
		  		{
		  			$error = array('error' => $this->upload->display_errors());
		  		}
		  		else
		  		{
					$where=array('dp_id' => $this->input->post('id'));
	  				$data = array('upload_data' => $this->upload->data());
	  				$image=$data['upload_data']['file_name'];
					$data=array(
							'title' => $this->input->post('designname'),
							'price' => $this->input->post('price'),
			 				'image' => $image
			 		);
	  			$updatedesign = $this->prime_model->updater('designs',$where,$data);

  				if($updatedesign > 0){
  				$this->session->set_flashdata('successmsg','Design Add Successfully');
	  			}else{
	  				$this->session->set_flashdata('errormsg','Design not Upload');
	  			}
	  			
	  			 redirect('designer/Designs/alldesigns');
		  		}
		}

				else
				{
				 	$where=array('dp_id' => $this->input->post('id'));
					$data=array(
							'title' => $this->input->post('designname'),
							'price' => $this->input->post('price')
							);
				$this->session->set_flashdata('successmsg','Design Edit Successfully');
				$this->prime_model->updater('designs',$where,$data);
				}
				redirect('designer/Designs/alldesigns');
	}
		

	public function delete_design()
		{
			$this->load->model('prime_model');
			$where=array('dp_id' => $this->uri->segment(4));
			$delete = $this->prime_model->deleter('designs',$where);

			if($delete > 0){
  				$this->session->set_flashdata('successmsg','Design Deleted Successfully');
  			}else{
  				$this->session->set_flashdata('errormsg','Design not Deleted');
  			}
	  			

			redirect('designer/Designs/alldesigns');
		}	
}