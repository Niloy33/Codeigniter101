<?php
class Demo_model extends CI_Model
{
    public function insert_data()
    {
        $data = array ('userName' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'email' => $this->input->post('email')
    );
       $this->db->insert('user_info', $data) ;
       $last_id = $this->db->insert_id();

       $data2 = array ('address' => $this->input->post('address'),
       'User_id' => $last_id
   );
      $this->db->insert('user_address', $data2) ;
    }

    
}
?>