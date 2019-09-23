<?php 

class AnnouncementModel extends CI_Model
{

 public function get_data($id){
    $sql = "SELECT * FROM announcement
            WHERE announcement.id='".$id."'";
    return $this->db->query($sql)->row_array();
}


public function get_all_announcement()
{
    return $this->db->select('*')
    ->from('announcement')
    ->get()->result();
}

public function delete_announcement($id)
{
		
    	$sql = "DELETE FROM announcement 
    	WHERE id = '".$id."'";
    	$this->db->query($sql);
}





}
?>