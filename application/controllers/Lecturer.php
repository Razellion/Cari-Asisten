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

	public function create()
	{
		$announcement = [
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'category' => $this->input->post('category'),
			'faculty' => $this->input->post('faculty'),
			'dateCreated' => date("Y\-m-d"),
			'lecturer_user_email' => $_SESSION['email'],
		];

		$this->LecturerModel->createPost($announcement);
		redirect('Lecturer/index');
	}

	public function update()
	{
		$announcement = [
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'category' => $this->input->post('category'),
			'faculty' => $this->input->post('faculty'),
			'dateCreated' => date("Y\-m-d"),
			'lecturer_user_email' => $_SESSION['email'],
		];

		$this->LecturerModel->createPost($announcement);
		redirect('Lecturer/index');
	}

	public function delete($id)
	{
		$this->LecturerModel->deletePost($id);
		redirect('Lecturer/my_profile');
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
		$this->load->model('AnnouncementModel');
		$data['title'] = "Edit Announcement";
		$data['as'] = $this->AnnouncementModel->get_data($id);
		
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

	public function page_detail($id)
	{
		$this->load->model('AnnouncementModel');
		$data['title'] = "Announcement Detail";
		$data['as'] = $this->AnnouncementModel->get_data($id);
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('announcement_detail_page_lecturer');
    	$this->load->view('template/footer');
	}
	public function my_profile()
	{
		$data['title'] = "My Profile";
		$data['announcement'] = $this->LecturerModel->getAnnouncement();
		$l_data = $this->LecturerModel->getProfile();
		$data['info'] = $l_data['user'];
		$data['nip'] = $l_data['lect'];
		$this->load->view('template/header_lecturer',$data);
    	$this->load->view('lecturer_profile');
    	$this->load->view('template/footer');
	}
}
