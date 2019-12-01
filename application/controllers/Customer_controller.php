<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        // $this->load->library('form_validation');
        $this->load->model('customer_model');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
    }
    
    // ========================================================================================= //
    //                                          FRONT END 
	public function show($start = 0)
	{
        $this->load->library('pagination');

        $config['base_url'] = base_url().'customer_controller/show/';
        $config['total_rows'] = $this->customer_model->get_count();
        $config['per_page'] = 5;

        $config['full_tag_open'] = '<ul class="pagination justify-content-end">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li page-item">';
        $config['first_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        // fetch from database
        $data['fetch_data'] = $this->customer_model->fetch_data($config['per_page'], $start);

        $data['main_view'] = "admin/customer";

        $this->load->view('layouts/main', $data);
        
	}


    public function edit_account($user=NULL)
    {
        // $data['fetch_data'] = $this->customer_model->get_customer_by_id($id);
        $data['fetch_data'] = $this->customer_model->get_customer_by_username($user);
        $data['main_view'] = "user/edit_user_account";
        $this->load->view('layouts/main_user', $data);
    }

    
    // ========================================================================================= //
    //                                          BACK END 
	public function add_customer()
	{
        
        // Setting up the rules
        // $this->form_validation->set_rules('input name', 'Display Error Name', 'validation');
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[2]|max_length[50]');
       
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('contactno', 'Contact No..', 'required|min_length[11]|max_length[11]|numeric');
        $this->form_validation->set_rules('date', 'Selecte Date', 'required');
		$this->form_validation->set_rules('gender', 'Select Gender', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('licenseno', 'license no.', 'required|min_length[13]|max_length[13]');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[2]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
        {            // error
            $data['main_view'] = "admin/add_customer";

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
                'Birth_Date' => $this->input->post('date'),
                'Gender' => $this->input->post('gender'),
                'license_no' => $this->input->post('licenseno'),
                'Email' => $this->input->post('email')
        	);
            $this->load->model('Customer_model');

            $result = $this->Customer_model->insert_data($data);
            $this->session->set_flashdata('add_customer_success', 'Customer successfully added.');
            redirect('admin_controller/add_customer');
        }
	}
    public function update_customer()
    {
        // Setting up the rules
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[2]|max_length[50]');
        
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('contactno', 'Contact No..', 'required|min_length[7]|max_length[15]|numeric');
        $this->form_validation->set_rules('date', 'Selecte Date', 'required');
		$this->form_validation->set_rules('gender', 'Select Gender', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('licenseno', 'license no.', 'required|min_length[7]|max_length[15]');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[2]|max_length[50]');

        if ($this->form_validation->run() == FALSE)
        {
            $data['customer'] = array(
                'Name' => $this->input->post('name'),
				
				'current_address' => $this->input->post('address'),
                'contact_no' => $this->input->post('contactno'),
                'Birth_Date' => $this->input->post('date'),
                'Gender' => $this->input->post('gender'),
                'license_no' => $this->input->post('licenseno'),
                'email' => $this->input->post('email')
            );
            var_dump($data['customer']);
            $data['main_view'] = "admin/edit_customer";

            $this->load->view('layouts/main', $data);
        }
        else
        {
            $data = array(
                'id' => $this->input->post('id'),
                'first_name' => $this->input->post('firstname'),
                'middle_name' => $this->input->post('middlename'),
                'last_name' => $this->input->post('lastname'),
                'contact' => $this->input->post('contactnumber')
            );

            $this->load->model('Customer_model');

            $result = $this->Customer_model->update_data($data);
            $this->session->set_flashdata('update_customer_success', 'Customer successfully updated.');
            redirect('Customer_controller/show');
        }
    }
    public function edit_customer($id=null)
    {

        $data['customer'] = $this->customer_model->get_customer_by_id($id);
        //var_dump($data['employee']);
        $data['main_view'] = "admin/edit_customer";
        $this->load->view('layouts/main', $data);
    }
    /*
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
    } */
    public function delete_customer($id) {
        $result = $this->customer_model->delete_customer($id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Customer Deleted');
        } else {
            $this->session->set_flashdata('error_msg', 'Faill to delete record');
        }
        redirect('customer_controller/show');
    }
}
