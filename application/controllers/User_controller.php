<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function test()
	{
		$this->load->model('user_model');

		$data['fetch_data'] = $this->user_model->test();
		$data['main_view'] = "user/test";

		$this->load->view('layouts/main_user', $data);
	}

	public function reserve_car($id = null)
	{
		if ($id != null) {
			$this->load->model('user_model');

			$data['fetch_data'] = $this->user_model->getSelectedCar($id);
			$data['main_view'] = "user/user_car_details";
			$this->load->view('layouts/main_user', $data);
		}
	}

	public function index()
	{
		// $data['test'] = $_SESSION['logged_in'];
		$this->load->model('user_model');

		$data['fetch_data'] = $this->user_model->test();
		$data['main_view'] = "user/home";

		$this->load->view('layouts/main_user', $data);
	}

	public function user_overview()
	{
		$data['main_view'] = "user/user_overview";

		$this->load->view('layouts/main_user', $data);
	}
	public function user_account_settings()
	{
		if ($id != null) {
			$this->load->model('Customer_model');

			$data['fetch_data'] = $this->customer_model->get_customer_by_id($id);
			$data['main_view'] = "user/user_account_settings";
			$this->load->view('layouts/main_user', $data);
		}
	}
	public function user_account_storeroom()
	{
		$data['main_view'] = "user/user_account_storeroom";
		
		$this->load->view('layouts/main_user', $data);
	}
	public function user_profile()
	{
		$data['main_view'] = "user/user_profile";
		
		$this->load->view('layouts/main_user', $data);
	}
	


	public function login()
	{
		$this->load->view('layouts/header');

		$this->load->view('user/login_user'); 
		$this->load->view('layouts/footer'); 

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user_controller/index');
	}

	public function team()
	{
		$data['main_view'] = "user/user_team";

		$this->load->view('layouts/main_user', $data);
	}

	public function user_signup()
	{
		$this->load->view('layouts/header');

		$this->load->view('user/user_signup'); 
		$this->load->view('layouts/footer'); 
	}

	public function user_signup_credentials()
	{
		$this->load->view('layouts/header');

		$this->load->view('user/user_signup_credentials'); 
		$this->load->view('layouts/footer'); 	
	}
	public function user_car_details()
	{
		$data['main_view'] = "user/user_car_details";
		
		$this->load->view('layouts/main_user', $data);
	}
}