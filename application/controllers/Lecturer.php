<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller {

	public function index()
	{
		$data['title'] = "Lecturer";
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('homepage_lecturer');
    	$this->load->view('template/footer');
	}

	public function create_announcement()
	{
		$data['title'] = "Create Announcement";
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('create_announcement');
    	$this->load->view('template/footer');		
	}

	public function edit_announcement()
	{
		$data['title'] = "Edit Announcement";
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('edit_announcement');
    	$this->load->view('template/footer');		
	}

	public function create_list()
	{
		$data['title'] = "Create List of Accepted Student";
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('create_list');
    	$this->load->view('template/footer');				
	}

	public function page_detail()
	{
		$data['title'] = "Announcement Detail";
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('announcement_detail_page_lecturer');
    	$this->load->view('template/footer');
	}
}
