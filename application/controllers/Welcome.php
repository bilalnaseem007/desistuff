<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 function __construct() {
        parent::__construct();
      
    }
	/**

	 */
	public function index(){
		$condition=array('status'=>1);
		$data['post_data']=$this->Base_model->get_data_on_condition('post',$condition);
		$data['content']='main';
		$this->load->view('template',$data);
	}
	public function post_detail(){
		
		$data['post_data']=$this->Base_model->get_data_on_condition('post',array('post_id'=>$this->uri->segment(3)));
		
		$data['content']='post_detail';
		$this->load->view('template',$data);
	}
}
