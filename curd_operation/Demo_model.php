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
    public function list()
    {
        $query= $this->db->query("SELECT users.id, users.name, user_address.address 
        FROM users 
        LEFT JOIN user_address ON user_address.user_id = users.id");
        $result =  $query->result();
        return $result;
    }
    public function edit($id)
    {
        $query= $this->db->query("SELECT users.id, users.name, user_address.address, users.email
        FROM users 
        LEFT JOIN user_address ON user_address.user_id = users.id
        WHERE users.id= '$id' ");
        $result =  $query->row();
        return $result;
    }
    public function edit_data($id)
    {
        $data = array ('name' => $this->input->post('name'),
        
        'email' => $this->input->post('email')
    );
       
       $this->db->where('id', $id);
        $this->db->update('users', $data);
        echo $this->db->last_query();
      /* $last_id = $this->db->insert_id();

       $data2 = array ('address' => $this->input->post('address'),
       'User_id' => $last_id
   );
      $this->db->insert('user_address', $data2) ;*/
    }
    public function delete($id)
    {
        $query= $this->db->query("DELETE 
        FROM users 
        WHERE users.id= '$id' ");
       
    }
    
}
?>