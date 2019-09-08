<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
      $data['title'] = "Student";
      $this->load->view('template/header_student',$data);
      $this->load->view('homepage');
      $this->load->view('template/footer');
	}
}
