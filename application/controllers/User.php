<?php
class User extends CI_Controller {

	function __construct(){
    	parent::__construct();
    	$this->load->model('UserModel');
  	}

	public function index()
	{
		$data['title'] = "Register";
		$this->load->model('AnnouncementModel');
		$data['announcement']=$this->AnnouncementModel->get_all_announcement();
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

	public function createAccStudent()
  	{
    	$this->load->model('UserModel');
    	$password = $this->input->post('password');
    	$email = $this->input->post('email');
    	$name = $this->input->post('name');
    	$nim = $this->input->post('nim');
    	$phoneNumber = $this->input->post('phoneNumber');

    	$user_insert = array (
      	'password' => $password,
      	'email' => $email,
      	'name' => $name,
      	'phoneNumber' => $phoneNumber
    	);

    	$register_user = $this->UserModel->register_user($user_insert, $email);

    	$register_student = $this->UserModel->register_student($nim, $email);

       if ($register_user) {
        redirect('user/login');
      } else {
        echo "Registration failed: email already exists!";
      echo "<script>setTimeout(\"location.href = 'http://localhost/asiaplaystation/index.php/account/create2';\",1500);</script>";
      }
  	}

  	public function createAccLecturer()
  	{
    	$this->load->model('UserModel');
    	$password = $this->input->post('password');
    	$email = $this->input->post('email');
    	$name = $this->input->post('name');
    	$nip = $this->input->post('nip');
    	$phoneNumber = $this->input->post('phoneNumber');
      $picProfile ="assets/image/";
    	$picProfile .= $this->input->post('picProfile');

    	$user_insert = array (
      	'password' => $password,
      	'email' => $email,
      	'name' => $name,
      	'phoneNumber' => $phoneNumber
    	);

    	$lecturer_insert = array (
    	'picProfile' => $picProfile,
    	'nip' => $nip
    	);

    	$register_user = $this->UserModel->register_user($user_insert, $email);

    	$register_lecturer = $this->UserModel->register_student($lecturer_insert, $email);

      if ($register_user) {
        redirect('user/login');
      } else {
        echo "Registration failed: email already exists!";
      echo "<script>setTimeout(\"location.href = 'http://localhost/asiaplaystation/index.php/account/create2';\",1500);</script>";
      }
  	}

    public function login_user()
    {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $login_student = $this->UserModel->login_student($email, $password);
      $login_lecturer = $this->UserModel->login_lecturer($email, $password);

      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      if ($login_student){
          $sess_data = array(
          'logged_in' => 1,
          'email' => $login_student->email
        );
          $this->session->set_userdata($sess_data);
          redirect('student/index');
        } else if ($login_lecturer){
          $sess_data = array(
          'logged_in' => 1,
          'email' => $login_lecturer->email
        );
          $this->session->set_userdata($sess_data);
          redirect('lecturer/index');
        } else {
          echo "<script>alert('Gagal login: Cek email, password!');</script>";
          redirect('user/login');
        }
    }



}
