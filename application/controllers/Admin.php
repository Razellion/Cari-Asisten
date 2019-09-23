<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('AnnouncementModel');
		$data['announcement']=$this->AnnouncementModel->get_all_announcement();
		$this->load->view('template/header_admin');
    	$this->load->view('homepage',$data);
    	$this->load->view('template/footer');
	}

	public function page_detail($id)
	{
    	$this->load->model('AnnouncementModel');
		$data=$this->AnnouncementModel->get_data($id) ;
		$this->load->view('template/header_admin',$data);
    	$this->load->view('announcement_detail_page_admin');
    	$this->load->view('template/footer');
	}

public function delete_announcement($id)
{
    	$this->load->model('AnnouncementModel');
    	$delete=$this->AnnouncementModel->delete_announcement($id);
    	redirect('admin/index');
}


}


