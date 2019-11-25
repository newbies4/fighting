<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sign_up_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        // $this->load->library('form_validation');
        $this->load->model('customer_model');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }
    
    //Signup
    public function sign_up()
	{
        
        // Setting up the rules
        // $this->form_validation->set_rules('input name', 'Display Error Name', 'validation');
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[2]|max_length[50]');
       
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('contactno', 'Contact No..', 'required|min_length[7]|max_length[15]|numeric');
       
	
       
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[2]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
        {            // error
            $data['main_view'] = "user_controller/user_signup";

			$this->load->view('layouts/main', $data);
        }
        else
        {
            // Succcess
            
        	$data = array(
                // database column name => input field name
        		'Name' => $this->input->post('name'),
				
				'current_address' => $this->input->post('address'),
                'contact_no' => $this->input->post('contactno'),
                
                'Email' => $this->input->post('email')
        	);
            $this->load->model('Customer_model');

            $result = $this->Customer_model->insert_data($data);
            $this->session->set_flashdata('add_customer_success', 'Customer successfully added.');
            redirect('User_controller/user_signup_credentials');
        }
	}
}
