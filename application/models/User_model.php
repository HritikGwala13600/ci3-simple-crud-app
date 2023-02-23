<?php



class User_model extends CI_Model{

    public function list(){
        return $users = $this->db->get('users')->result_array();
    }

    function create($formData){
        $this->db->insert('users',$formData);
    }

    public function getUser($id){
        $this->db->where('user_id',$id);
        return $user = $this->db->get('users')->row_array();
    }

    public function updateUser($userId,$userName,$userEmail){
        $data = array(
            'user_name' => $userName,
            'user_email' => $userEmail,
        );
        $this->db->where('user_id',$userId);
        $this->db->update('users',$data);
        return;
    }

    public function deleteUser($userId){    
        $this->db->where('user_id',$userId);
        $this->db->delete('users');
            return;
    }
}