<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
			$data['title'] = "Admin";
			$this->load->view('template/header_admin',$data);
    	$this->load->view('homepage');
    	$this->load->view('template/footer');
	}
}
