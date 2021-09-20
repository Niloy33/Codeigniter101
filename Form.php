<?php

class Form extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Demo_model');
		
	}
        public function index()
        {
                
            if($this->input->post("create")){
              
                
                $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user_info.userName]');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('id', 'ID', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        //$this->load->view('myform');
                       
                        
                }
                else
                {
                        $this->load->view('formsuccess');
                        $this->Demo_model->insert_data();
                }
            }
            $this->load->view('myform');
                
        }
}
?>