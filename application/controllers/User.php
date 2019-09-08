<?php
class User extends CI_Controller {

	public function index()
	{
		$data['title'] = "Register";
		$this->load->view('template/header',$data);
		$this->load->view('home_register');
		$this->load->view('template/footer');

	}

	public function register_student()
	{
		$this->load->view('template/header');
		$this->load->view('register_student');
		$this->load->view('template/footer');
	}

	public function register_lecturer()
	{
		$this->load->view('template/header');
		$this->load->view('register_lecturer');
		$this->load->view('template/footer');
	}







}
