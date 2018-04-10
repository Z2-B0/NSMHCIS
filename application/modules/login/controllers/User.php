<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('admin-dashboard/Admin');
		}
		else{
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean',
					array('required' => 'You must provide a %s.')
                );
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('login_page');
            }
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->users_model->login($username, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			redirect('admin-dashboard/Admin/index');
		}
		else{
			redirect('login/User');
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}

	public function home(){
		//load session library
		$this->load->library('session');
        
		//restrict users to go to dashboard if not logged in
		if($this->session->userdata('user')){
                    
            var_dump($this->session->userdata('user'));
			redirect('admin-dashboard/Admin');
		}
		else{
			redirect('login/User');
		}
		
	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('login/User');
    }

}
