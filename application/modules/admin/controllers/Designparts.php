<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designparts extends CI_Controller {
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

	public function addDesignparts(){
		$this->load->view('common/header');
		$this->load->view('addDesignparts');
		$this->load->view('common/footer');

	}

	public function add_design_category(){
		
		$this->load->model('prime_model');
		$designcatname = $this->input->post('designcatname');
		$where = array('designcategoryname' => $this->input->post('designcatname'));
		$exists=$this->prime_model->get_data('designcategory','',$where);
		if(empty($exists))
		{

			$data=array(	
						'designcategoryname' => $designcatname,
		 			);

	  		$datainsert = $this->prime_model->inserter('designcategory',$data);
  			if($datainsert > 0){
  				$this->session->set_flashdata('successmsg','design Category Add Successfully');
  			}else{
  				$this->session->set_flashdata('errormsg','Category not Upload');
  			}
	  	}else{

	  		$this->session->set_flashdata('errormsg','Design Category Name Exists');
	  	}

		redirect('admin/Designparts/addDesignparts');


	}

	public function allDesignCategory(){
		$this->load->model('prime_model');
		$data['designcategory']=$this->prime_model->get_data('designcategory');
		$this->load->view('common/header');
		$this->load->view('alldesignCategory',$data);
		$this->load->view('common/footer');
	}


	public function designcatedit()
	{
		$where=array('d_id' => $this->uri->segment(4));
		$this->load->model('prime_model');
		$data['designcategory']=$this->prime_model->get_data('designcategory','',$where);
		$this->load->view('common/header');
		$this->load->view('designcatedit.php',$data);
		$this->load->view('common/footer');
	}

	public function edit_design_category()
	{
		$this->load->model('prime_model');
		$where=array('d_id' => $this->input->post('id'));
		$data=array(
				'designcategoryname' => $this->input->post('designcatname'),
			);
	  	$this->prime_model->updater('designcategory',$where,$data);
		$this->session->set_flashdata('successmsg',' Design Category Update Successfully');
	  		redirect('admin/Designparts/allDesignCategory');
	}
	
		

	public function designcatdel()
		{
			$this->load->model('prime_model');
			$where=array('d_id' => $this->uri->segment(4));
			$delete = $this->prime_model->deleter('designcategory',$where);

  			if($delete > 0){
  				$this->session->set_flashdata('successmsg','design Category Deleted Successfully');
  			}else{
  				$this->session->set_flashdata('errormsg','Category not Upload');
  			}
			redirect('admin/Designparts/allDesignCategory');
		}	
}