<?php

class UserModel extends CI_Model{

  public function login_student($email, $password){
    $this->db->select('*');
    $this->db->from('student');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $this->db->join('user', 'user.email = student.user_email');
    $result = $this->db->get();
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function login_lecturer($email, $password){
    $this->db->select('*');
    $this->db->from('lecturer');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $this->db->join('user', 'user.email = lecturer.user_email');
    $result = $this->db->get();
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function login_admin($email, $password){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $this->db->join('user', 'admin.user_email = user.email');
    $result = $this->db->get();
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function get_same($table, $email){
    $this->db->from($table);
    $this->db->where('email',$email);

    $query = $this->db->get();

    if($query->num_rows()==1)
    {
      return false;
    } else {
      return true;
    }
  }

  public function register_user($data, $email){
    $sql = $this->UserModel->get_same($email);
    if($sql == FALSE){
        return false;
    }else{
        $insert = $this->db->insert('user', $data);
        if ($insert){
          return TRUE;
        }else{
          return FALSE;
        }
    }
  }

  public function register_student($data, $email){
    $sql = $this->UserModel->get_same('student', $email);
    if($sql == FALSE){
        return false;
    }else{
        $insert = $this->db->insert('student', $data);
        if ($insert){
          return TRUE;
        }else{
          return FALSE;
        }
    }
  }

  public function register_lecturer($data, $email){
    $sql = $this->UserModel->get_same('lecturer', $email);
    if($sql == FALSE){
        return false;
    }else{
        $insertLecturer = $this->db->insert('lecturer', $data);
        if ($insert){
          return TRUE;
        }else{
          return FALSE;
        }
    }
  }

  public function login_user($email, $password){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get();
    if($result->num_rows()==1){
        return $result->row();
    }else{
        return false;
    }
  }

}