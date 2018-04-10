<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('dashboard');
	}

    public function userlist(){
        $this->load->view('userlist');
    }
    
    public function calendar(){
        
        $this->load->view('calendar');
    }
    
}
