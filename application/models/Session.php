<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Model{
	public function check_s()
	{
		if($this->session->userdata('lastname') !=null)
            return TRUE;
        else
            redirect("auth/login", "refresh");
		
	}
}