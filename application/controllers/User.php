<?php
class User extends CI_Controller {

	function __construct(){
    	parent::__construct();
    	$this->load->model('UserModel');
  	}

	public function index()
	{
    $data['title'] = "Welcome to Cari Asisten";
		$this->load->model('AnnouncementModel');
		$data['announcement']=$this->AnnouncementModel->get_all_announcement();
		$this->load->view('template/header',$data);
		$this->load->view('homepage',$data);
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
      $student_insert = array (
      'user_email' => $email,
      'nim' => $nim
      );

    	$register_user = $this->UserModel->register_user($user_insert, $email);

    	$register_student = $this->UserModel->register_student($student_insert, $email);

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

    	$user_insert = array (
      	'password' => $password,
      	'email' => $email,
      	'name' => $name,
      	'phoneNumber' => $phoneNumber
    	);

      $sess_data = array (
        'nip' => $nip,
        'email' => $email
      );

    	$register_user = $this->UserModel->register_user($user_insert, $email);
      $this->session->set_userdata($sess_data);

      if ($register_user) {
        redirect('user/uploadPic');
        } else {
        echo "Registration failed: email already exists!";
        echo "<script>setTimeout(\"location.href = 'http://localhost/asiaplaystation/index.php/account/create2';\",1500);</script>";
      }
  	}

    public function uploadPic(){
      $data['title'] = "Register Lecturer";
      $this->load->view('template/header',$data);
      $this->load->view('upload_picture');
      $this->load->view('template/footer');
    }

    public function uploadPic2(){
      $this->load->model('UserModel');
      $picProfile = $this->input->post('picProfile');
      $lecturer_insert = array (
        'user_email' => $this->session->userdata('email'),
        'picProfile' => $picProfile,
        'nip' => $this->session->userdata('nip')
        );

        $register_lecturer = $this->UserModel->register_lecturer($lecturer_insert,$this->session->userdata('email'));
        if ($register_lecturer){
          redirect('user/login');
        }else {
        echo "Registration failed: email already exists!";
        echo "<script>setTimeout(\"location.href = 'http://localhost/Cari-Asisten';\",1500);</script>";
      }
    }

    public function login_user()
    {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $login_student = $this->UserModel->login_student($email, $password);
      $login_lecturer = $this->UserModel->login_lecturer($email, $password);
      $login_admin = $this->UserModel->login_admin($email, $password);

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
        } else if ($login_admin){
          $sess_data = array(
          'logged_in' => 1,
          'email' => $login_admin->email
        );
          $this->session->set_userdata($sess_data);
          redirect('admin/index');
        } else {
          echo "<script>alert('Gagal login: Cek email, password!');</script>";
          redirect('user/login');
        }
    }

    public function logout()
    {
      $this->session->sess_destroy();
      redirect('user/index');
    }



}
