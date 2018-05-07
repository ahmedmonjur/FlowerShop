<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index(){
		$this->login();
	}	

	public function login(){
		$data['title']="Sign In | Flower Shop";
		$this->load->view('sign_in_view',$data);
	}

	public function loginValidation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');

		if($this->form_validation->run())
		{
			$email= $_POST['email'];
			$password= md5($_POST['password']);

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$query = $this->db->get();

			$user = $query->row_array();

			// if($user['email'])
			// {


				$data = array(
					'firstname' => "Sujar Ahmed"
					);

				$this->session->set_userdata($data);
				$this->load->helper('url');
				redirect('user', 'refresh');

				//$this->session->set_flashdata("success", "Successfully logged in");
				// redirect("user/dashboard", "refresh");
				//echo $this->session->userdata('lastname');
				

				
			//}
			// else
			// {
			// 	$this->session->set_flashdata("error", "No such account in database.");
			// 	redirect("auth/login", "refresh");
			// }
		}

	}

	public function signup(){
		$data['title']="Signup | Flower Shop";

		$this->load->view('sign_up_view',$data);
	}

	public function signupValidation(){
		if(isset($_POST['register']))
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[5]|max_length[20]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

			if($this->form_validation->run())
			{
				$data=array(
					'firstName'=> $_POST['firstname'],
					'lastName'=> $_POST['lastname'],
					'email'=> $_POST['email'],
					'password'=> md5($_POST['password']),
					'created_date'=> date('Y-m-d')
				);

				$this->db->insert('users', $data);


			
				$this->session->set_flashdata("signupsuccess", "Your account has been created successfully.");
				redirect('auth/signup','refresh');
			
			}
			$this->signup();
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->login();
	}

}

