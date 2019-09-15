<?php
class User extends CI_Controller {

	public function index()
	{
		$data['title'] = "Register";
		$this->load->view('template/header',$data);
		$this->load->view('homepage');
		$this->load->view('template/footer');

	}

	public function register()
	{
		$data['title'] = "Register Student";
		$this->load->view('template/header',$data);
		$this->load->view('register');
		$this->load->view('template/footer');
	}

	public function register_student()
	{
		$data['title'] = "Register Student";
		$this->load->view('template/header',$data);
		$this->load->view('register_student');
		$this->load->view('template/footer');
	}

	public function register_lecturer()
	{
		$data['title'] = "Register Lecturer";
		$this->load->view('template/header',$data);
		$this->load->view('register_lecturer');
		$this->load->view('template/footer');
	}

	public function login()
	{
		$data['title'] = "Login";
		$this->load->view('template/header',$data);
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function page_detail()
	{
		$data['title'] = "Announcement Detail";
		$this->load->view('template/header',$data);
		$this->load->view('announcement_detail_page');
		$this->load->view('template/footer');
	}

}
