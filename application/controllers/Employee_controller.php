<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        // $this->load->library('form_validation');
        $this->load->model('employee_model');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
    }

    // ========================================================================================= //
    //                                          FRONT END 
	public function show($start = 0)
	{
        $this->load->library('pagination');

        $config['base_url'] = base_url().'employee_controller/show/';
        $config['total_rows'] = $this->employee_model->get_count();
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
        $data['fetch_data'] = $this->employee_model->fetch_data($config['per_page'], $start);

        $data['main_view'] = "admin/employee";

        $this->load->view('layouts/main', $data);
        
	}

    public function edit_employee($id=null)
    {

        $data['employee'] = $this->employee_model->get_employee_by_id($id);
        //var_dump($data['employee']);
        $data['main_view'] = "admin/edit_employee";
        $this->load->view('layouts/main', $data);
    }

    // ========================================================================================= //
    //                                          BACK END 
	public function add_employee()
	{
        // Setting up the rules
        // $this->form_validation->set_rules('input name', 'Display Error Name', 'validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('contactnumber', 'Contact Number', 'required|min_length[7]|max_length[15]|numeric');

		if ($this->form_validation->run() == FALSE)
        {
            // error
            $data['main_view'] = "admin/add_employee";

			$this->load->view('layouts/main', $data);
        }
        else
        {
            // Succcess

        	$data = array(
                // database column name => input field name
        		'first_name' => $this->input->post('firstname'),
				'middle_name' => $this->input->post('middlename'),
				'last_name' => $this->input->post('lastname'),
				'contact' => $this->input->post('contactnumber')
        	);        
            $this->load->model('employee_model');

            $result = $this->employee_model->insert_data($data);
            $this->session->set_flashdata('add_employee_success', 'Employee successfully added.');
            redirect('admin_controller/add_employee');
        }
	}

    public function update_employee()
    {
        // Setting up the rules
        $this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('contactnumber', 'Contact Number', 'required|min_length[7]|max_length[15]|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            $data['employee'] = array(
                'id' => $this->input->post('id'),
                'first_name' => $this->input->post('firstname'),
                'middle_name' => $this->input->post('middlename'),
                'last_name' => $this->input->post('lastname'),
                'contact' => $this->input->post('contactnumber')
            );
            var_dump($data['employee']);
            $data['main_view'] = "admin/edit_employee";

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

            $this->load->model('Employee_model');

            $result = $this->Employee_model->update_data($data);
            $this->session->set_flashdata('update_employee_success', 'Employee successfully updated.');
            redirect('employee_controller/show');
        }
    }

    public function delete_employee($id) {
        $result = $this->employee_model->delete_employee($id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record deleted successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Faill to delete record');
        }
        redirect('employee_controller/show');
    }
}
