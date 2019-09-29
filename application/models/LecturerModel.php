<?php

  class LecturerModel extends CI_Model
  {

    public function getProfile()
    {
      $email = $_SESSION['email'];
      $this->db->select('name');
      $this->db->where('email',$email);
      $user = $this->db->get('user');
      $sql['user'] = $user->row_array();

      $this->db->select('NIP');
      $this->db->where('user_email',$email);
      $lect = $this->db->get('lecturer');
      $sql['lect'] = $lect->row_array();
      return $sql;
    }

    public function getAnnouncement()
    {
      $email = $_SESSION['email'];
      $this->db->select('*');
      $this->db->where('email',$email);
      $sql = $this->db->get('announcement');
      return $sql->row_array();
    }

    public function updatePost($id)
    {
      $data = [
        'title' => $this->input->post('title'),
        'content' => $this->input->post('content'),
        'category' => $this->input->post('category'),
        'faculty' => $this->input->post('faculty'),
      ];
      $this->db->where('id',$id);
      $this->db->update('announcement',$data);
    }

    public function deletePost($id)
    {
      $this->db->where('id',$id);
      $this->db->delete('announcement');
    }

    public function createPost()
    {
      $announcement = [
        'title' => $this->input->post('title'),
        'content' => $this->input->post('content'),
        'category' => $this->input->post('category'),
        'faculty' => $this->input->post('faculty'),
        'lecturer_user_email' => $_SESSION['email'],
      ];
      $this->db->insert('announcement',$data);
      $sql = $this->db->query('SELECT id FROM announcement ORDER BY desc;');
      $id = $sql->result_array();

      $recruitment = [
        'course' => $this->input->post('course'),
        'period' => $this->input->post('period'),
        'announcement_id' => $id,
      ];
      $this->db->insert('recruitment',$data);
    }

    public function getFile($id)
    {
      $this->db->select('*');
      $this->db->where('recruitment_announcement_id',$id);
      $sql = $this->db->get('file');
      return $sql->row_array();
    }


  }
?>
