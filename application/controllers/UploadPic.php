<?php

class UploadPic extends CI_Controller {

function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
}

function index()
{
$this->load->view('upload_picture', array('error' => ' ' ));
}

function do_upload()
{
$config['upload_path'] = './uploads/lecturerPic/';
$config['allowed_types'] = 'jpg|png';
$config['max_size'] = 100;
$config['max_width'] = 1024;
$config['max_height'] = 768;

$this->load->library('upload', $config);

if ( ! $this->upload->do_upload())
{
  redirect('user/index');
}
else
{

  redirect('user/login');
}

}
}
?>
