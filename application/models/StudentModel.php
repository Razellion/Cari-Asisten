<?php

class StudentModel extends CI_Model
{


public function get_all_announcement()
{
    return $this->db->select('*')
    ->from('recruitment')
    ->get()->result();
}












}

?>
