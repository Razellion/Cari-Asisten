<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


	public function index()
	{
      $data['title'] = "Student";
      $this->load->model('AnnouncementModel');
      $data['announcement']=$this->AnnouncementModel->get_all_announcement();
      $this->load->view('template/header_student',$data);
      $this->load->view('homepage_student');
      $this->load->view('template/footer');
	}

	public function page_detail()
	{
      $data['title'] = "Announcement Detail";
      $this->load->view('template/header_student',$data);
      $this->load->view('announcement_detail_page_student');
      $this->load->view('template/footer');
	}

	public function apply()
	{
      $data['title'] = "Upload File";
      $this->load->view('template/header_student',$data);
      $this->load->view('upload_form');
      $this->load->view('template/footer');
	}


}
