<?php
class User_model extends CI_Model{
    public function __construct(){
        
    }
 public function validate(){
       $user = $this->input->post('username');
       $password = $this->input->post('password');
       $password=md5($password);
       $query = $this->db->query("SELECT * FROM users WHERE username ='$user' AND password='$password'");
       $row = $query->row();
       if($row){
           $user = $row->username;
           $this->session->set_userdata('user',$user);
           return true;
       }else{echo "";return false;}
        }
 public function create_user(){
     $name = $this->input->post('name');
     $password = $this->input->post('password');
      $password=md5($password);
     $credintials = array('username'=>$name,'password'=>$password);
     $this->db->insert('users',$credintials);
     return true;
 }
 public function password(){
     $user = $this->session->userdata('user');
     return $this->db->query("SELECT password FROM users WHERE username ='$user'")->row()->password;
 }
 public function change_password($password){
    $user = $this->session->userdata('user');
    $password = md5($password);
     $this->db->query("UPDATE users SET password='$password' WHERE username='$user'");
     return true;
 }
    public function list_users(){
        return $this->db->get('users')->result();
    }
    public function delete_user($id){   
        $this->db->where('id', $id);
        $this->db->delete('users');
        return true;
    }
    public function list_edited_user($id){
        $this->db->where('id',$id);
        $result = $this->db->get('users');
        return $result->result();
    }
    public function edit_user($userdata){
        $id=$userdata[0];
        $username=$userdata[1];
        $password=$userdata[2];
        $password=md5($password);
        $this->db->where('id',$id);
        $credintials=array('username'=>$username,'password'=>$password);
        $this->db->update('users',$credintials);
        return true;
    }
    }
?> 