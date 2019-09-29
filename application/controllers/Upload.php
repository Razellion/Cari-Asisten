<?php

class Upload extends CI_Controller {

function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
}

function index()
{
$this->load->view('upload_form', array('error' => ' ' ));
}

function do_upload()
{
$config['upload_path'] = './uploads/studentFile/';
$config['allowed_types'] = 'zip|rar';
$this->load->library('upload', $config);

if ( ! $this->upload->do_upload())
{
  redirect('student/apply');
}
else
{

  redirect('student/index');
}

}
}
?>
