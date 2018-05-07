<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper('url');
		// if(isset($_SESSION['logged_in']) != TRUE)
		// 	redirect('auth/login', 'refresh');
	}
	public function index(){
		$this->dashboard();
	}	
	public function dashboard(){
		$this->load->view('dashboard_view');
	}
}