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
}
