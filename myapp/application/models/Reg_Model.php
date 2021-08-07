<?php 
class Reg_Model extends CI_Model{
    public function saverecords($User_name,$User_email,$User_mobile){
        $query="insert into users values('','$User_name','$User_email','$User_mobile')";
        $this->db->query($query);
    }

    public function display_users(){
        $query=$this->db->query("select * from users");
        return $query->result();
    }
    public function delete_users($User_id){
        $this->db->query("delete from users where User_id='".$User_id."'");
    }
    public function update_users($User_id,$User_name,$User_email,$User_mobile){
        $query=$this->db->query("update users SET User_name='$User_name', User_email='$User_email', User_mobile='$User_mobile' where User_id='".$User_id."'");
    }
    public function displayusersbyid($User_id){
        $query=$this->db->query("select * from users where User_id='".$User_id."'");
        return $query->result();
    }
}
?>