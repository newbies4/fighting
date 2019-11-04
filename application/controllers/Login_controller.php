<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        // $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }

	public function index()
	{

	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]');


		if ($this->form_validation->run() == FALSE)
        {
            // redirect('admin_controller/admin_login');
            $this->load->view('layouts/header');
			$this->load->view('admin/admin_login');
			$this->load->view('layouts/footer');
        }
        else
        {
        	$this->load->model('login_model');
        	
    //         // $this->load->view('formsuccess');

        	$data = array(
        		'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
        	);
			$data['fetch_data'] = $this->login_model->admin_login($data);

			if($data['fetch_data']->num_rows() == 1) {
				$rows = $data['fetch_data']->row();
				$sess_data = array(
					'username' => $rows->username,
					'logged_in' => TRUE
				);
				$this->session->set_userdata($sess_data);
				redirect('admin_controller');
			} else {
				$this->session->set_flashdata('login_failed', 'Login failed, check your username or password.');
				redirect('admin_controller/admin_login');

			}

    //         // $data['firstname'] = $this->input->post('firstname');
    //         // $data['middlename'] = $this->input->post('middlename');
    //         // $data['lastname'] = $this->input->post('lastname');
    //         // $data['contactnumber'] = $this->input->post('contactnumber');

    //         $this->load->model('Employee_model');

    //         // echo $data['firstname'];
    //         $result = $this->Employee_model->insert_data($data);

    //         redirect('admin_controller/add_employee');
        }
	}
// 	public function index()
// 	{
// 		$data['main_view'] = "admin/dashboard";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function rent()
// 	{
// 		$data['main_view'] = "admin/rent";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function reservation()
// 	{
// 		$data['main_view'] = "admin/reservation";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function return_car()
// 	{
// 		$data['main_view'] = "admin/return_car";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function cars()
// 	{
// 		$data['main_view'] = "admin/cars";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function customer()
// 	{
// 		$data['main_view'] = "admin/customer";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function employee()
// 	{
// 		$this->load->model('employee_model');
// 		$data['fetch_data'] = $this->employee_model->fetch_data();

// 		$data['main_view'] = "admin/employee";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function add_cars()
// 	{
// 		$data['main_view'] = "admin/add_cars";

// 		$this->load->view('layouts/main', $data);
// 	}

// 	public function admin_login()
// 	{
		
// 		$this->load->view('layouts/header');
// 		$this->load->view('admin/admin_login');
// 		$this->load->view('layouts/footer');
// 	}
// 	public function add_customer()
// 	{
		
// 		$data['main_view'] = "admin/add_customer";
		
// 		$this->load->view('layouts/main', $data);
// 	}
// /* head */
// 	public function add_employee()
// 	{
		
// 		$data['main_view'] = "admin/add_employee";
		
// 		$this->load->view('layouts/main', $data);
// 	}
// 	public function add_reservation()
// 	{
		
// 		$data['main_view'] = "admin/add_reservation";
		
// 		$this->load->view('layouts/main', $data);
// 	}
// 	public function add_rent()
// 	{
		
// 		$data['main_view'] = "admin/add_rent";
		
// 		$this->load->view('layouts/main', $data);
// 	}
	


}
