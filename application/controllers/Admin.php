<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
			redirect('login');
		}
    }
	/**

	 */
	public function index()
	{
		$data['content']='admin/main';
		$this->load->view('admin/template',$data);
	}
	public function add_post(){
		$data['content']='admin/add_post';
		$this->load->view('admin/template',$data);
	}
	public function insert_post(){
    $ext = end((explode(".", $_FILES["image"]["name"]))); # extra () to prevent notice
	$imagePrefix = time(); 
	$name = $imagePrefix.'.'.$ext;
    $config['upload_path']   = './images/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 4086;
	$config['file_name'] = $name;
	

    $this->load->library('upload', $config);

    if( ! $this->upload->do_upload('image')){
        $error = array('error' => $this->upload->display_errors());

        print_r($error);exit;
    }
    else{
        $upload_data = $this->upload->data();
		$post_data=array(
		"post_title" => $this->input->post('title'),
		"post_description" => $this->input->post('description'),
		"post_video" => $this->input->post('video'),
		"post_img" => $name
		);
        $this->Base_model->insert_data('post',$post_data);
		$this->add_post(); 
    }
	}
	public function post_details(){
		$data['post_details']=$this->Base_model->get_data('post');
		
		$data['content']='admin/post_details';
		$this->load->view('admin/template',$data);
	}
	public function published_post(){
		$condition=array('post_id'=>$this->uri->segment(3));
		$update=array('status'=>1);
		$this->Base_model->update_data('post',$update,$condition);
		redirect('admin/post_details');
	}
	public function unpublished_post(){
		$condition=array('post_id'=>$this->uri->segment(3));
		$update=array('status'=>0);
		$this->Base_model->update_data('post',$update,$condition);
		redirect('admin/post_details');
	}
	public function logout_user(){
	session_destroy();
	redirect('login');
	
	}
}