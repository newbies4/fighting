<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('employee_model');
		$data['fetch_data'] = $this->employee_model->fetch_data();

		$data['main_view'] = "admin/employee";

		$this->load->view('layouts/main', $data);
	}

	public function add_employee()
	{
		// Setting up the rules
		$this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('contactnumber', 'Contact Number', 'required|min_length[7]|max_length[15]|numeric');

		if ($this->form_validation->run() == FALSE)
        {
            // $this->load->view('admin/add_employee');
            // redirect('Admin_controller/add_employee');
            $data['main_view'] = "admin/add_employee";

			$this->load->view('layouts/main', $data);
        }
        else
        {
            // $this->load->view('formsuccess');
            echo "Hi";
        }
	}
}
