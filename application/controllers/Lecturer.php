<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller {

	public function index()
	{
			$data['title'] = "Lecturer";
			$this->load->view('template/header_lecturer',$data);
    	$this->load->view('announcement_detail_page_lecturer');
    	$this->load->view('template/footer');
	}
}
