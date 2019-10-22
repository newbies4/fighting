<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in'))
		{
			$data['main_view'] = "admin/dashboard";

			$this->load->view('layouts/main', $data);
		} else {
			redirect('admin_controller/admin_login');
		}
	}

	public function admin_login()
	{
		
		$this->load->view('layouts/header');
		$this->load->view('admin/admin_login');
		$this->load->view('layouts/footer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin_controller/admin_login');

	}

	public function rent()
	{
		$data['main_view'] = "admin/rent";

		$this->load->view('layouts/main', $data);
	}

	public function reservation()
	{
		$data['main_view'] = "admin/reservation";

		$this->load->view('layouts/main', $data);
	}

	public function return_car()
	{
		$data['main_view'] = "admin/return_car";

		$this->load->view('layouts/main', $data);
	}

	public function cars()
	{
		$data['main_view'] = "admin/cars";

		$this->load->view('layouts/main', $data);
	}

	public function customer()
	{
		$data['main_view'] = "admin/customer";

		$this->load->view('layouts/main', $data);
	}

	public function employee()
	{
		$this->load->model('employee_model');
		$data['fetch_data'] = $this->employee_model->fetch_data();

		$data['main_view'] = "admin/employee";

		$this->load->view('layouts/main', $data);
	}

	public function add_cars()
	{
		$data['main_view'] = "admin/add_cars";

		$this->load->view('layouts/main', $data);
	}

	public function add_customer()
	{
		
		$data['main_view'] = "admin/add_customer";
		
		$this->load->view('layouts/main', $data);
	}
/* head */
	public function add_employee()
	{
		
		$data['main_view'] = "admin/add_employee";
		
		$this->load->view('layouts/main', $data);
	}
	public function add_reservation()
	{
		
		$data['main_view'] = "admin/add_reservation";
		
		$this->load->view('layouts/main', $data);
	}
	public function add_rent()
	{
		
		$data['main_view'] = "admin/add_rent";
		
		$this->load->view('layouts/main', $data);
	}
	public function team()
	{
		
		$data['main_view'] = "user/team";
		
		$this->load->view('layouts/main', $data);
	}
	


}
