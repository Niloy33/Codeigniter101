<?php

class Form extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Demo_model');
	//$this->output->enable_profiler(true);	
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
        public function list()
        {
           $data = [];     
           $data['content']= $this->Demo_model->list();
            $this->load->view('list', $data);
                
        }

        public function edit($id)
        {
                
            if($this->input->post("create")){
              
                
                $this->form_validation->set_rules('name', 'Username', 'required|is_unique[users.name]');
                
                $this->form_validation->set_rules('email', 'Email', 'required');
                


                if ($this->form_validation->run() == FALSE)
                {
                        //$this->load->view('myform');
                       
                     echo validation_errors('<div class="error">', '</div>'); 
                }
                else
                {
                       // $this->load->view('formsuccess');
                        $this->Demo_model->edit_data($id);
echo "done";
                }
            }
           
            $data = [];     
            $data['content']= $this->Demo_model->edit($id);
            $this->load->view('edit', $data);
                
        }
        public function delete($id)
        {
           $data = [];     
           $data['content']= $this->Demo_model->delete($id);
           redirect('form/list');
                
        }
}
?>