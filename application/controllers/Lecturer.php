<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller {

	function __construct()
	{
			parent::__construct();
			$this->load->model('LecturerModel');
	}

	public function index()
	{
		$data['title'] = "Lecturer";
		$this->load->model('AnnouncementModel');
		$data['announcement']=$this->AnnouncementModel->get_all_announcement();
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
	public function my_profile()
	{
		$data['title'] = "My Profile";
		$l_data = $this->LecturerModel->getProfile();
		$data['info'] = $l_data['user'];
		$data['nip'] = $l_data['lect'];
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('lecturer_profile');
    	$this->load->view('template/footer');
	}
}
