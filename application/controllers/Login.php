<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in')){
			redirect('admin');
		}
    }
	/**

	 */
	public function index(){
	$this->load->view('admin/login');
	}


	public function authenticate_user(){
		$user_data=array(
		'username'=>$this->input->post('username'),
		'password'=>md5($this->input->post('password'))
		);
		$result = $this->Base_model->get_data_on_condition('user',$user_data);
		if(empty($result)){
			$data['error']=true;
			$this->load->view('admin/login',$data);
		}
		else{
		$user_info = array(
        'username'  => $result[0]['username'],
        'email'     => $result[0]['email'],
        'logged_in' => TRUE
		);

		$this->session->set_userdata($user_info);
		redirect('admin');
		}
			
	}
}