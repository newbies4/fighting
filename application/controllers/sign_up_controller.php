<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        // $this->load->library('form_validation');
        $this->load->model('customer_model');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
    }
    
    //Signup
    public function sign_up()
	{
        
        // Setting up the rules
        // $this->form_validation->set_rules('input name', 'Display Error Name', 'validation');
		$this->form_validation->set_rules('fname', 'First Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('contactno', 'Contact No..', 'required|min_length[7]|max_length[15]|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[2]|max_length[50]');
	

		if ($this->form_validation->run() == FALSE)
        {            // error
            $data['main_view'] = "user/user_signup";

			$this->load->view('layouts/main_user', $data);
        }
        else
        {
            // Succcess
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            
        	$dataArr = array(
                // database column name => input field name
        		'Name' => $fname . ' ' . $lname,
				'Gender' => $this->input->post('gender'),
				'current_address' => $this->input->post('address'),
                'contact_no' => $this->input->post('contactno'),
                
                'Email' => $this->input->post('email')
        	);
            $this->load->model('Customer_model');

            $data['customerid'] = $this->Customer_model->insert_data($dataArr);
            $this->session->set_flashdata('add_customer_success', 'Customer successfully added.');
            
            $this->load->view('layouts/header');
            $this->load->view('user/user_signup_credentials', $data); 
            $this->load->view('layouts/footer');
        }
	}

    public function sign_up_credentials()
    {
        // Setting up the rules
        // $this->form_validation->set_rules('input name', 'Display Error Name', 'validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[2]|max_length[50]|matches[password]');
    
        if ($this->form_validation->run() == FALSE)
        {
            $data['customerid'] = $this->input->post('customerid');     
            $this->load->view('layouts/header');
            $this->load->view('user/user_signup_credentials', $data); 
            $this->load->view('layouts/footer');
        }
        else
        {
            // Succcess
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $dataArr = array(
                // database column name => input field name
                
                'customer_id_fk' => $this->input->post('customerid'),
                'user_type' => 'customer',
                'username' => $username,
                'password' => $password
            );

            $this->load->model('sign_up_model');

            $this->sign_up_model->insert_data($dataArr);
            $this->session->set_flashdata('message', 'Sign up successfully.');
            
            $this->load->view('layouts/header');
            $this->load->view('user/login_user'); 
            $this->load->view('layouts/footer'); 
        }
    }
}
