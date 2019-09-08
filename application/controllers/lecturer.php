<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lecturer extends CI_Controller {

	public function index()
	{
		$data['title'] = "Announcement Detail";
		$this->load->view('template/header',$data);
    	$this->load->view('announcement_detail_page_lecturer');
    	$this->load->view('template/footer');
	}
}
