<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = "Admin";
		$this->load->view('template/header_admin',$data);
    	$this->load->view('homepage_admin');
    	$this->load->view('template/footer');
	}

	public function page_detail()
	{
		$data['title'] = "Announcement Detail";
		$this->load->view('template/header_admin',$data);
    	$this->load->view('announcement_detail_page_admin');
    	$this->load->view('template/footer');
	}
}
