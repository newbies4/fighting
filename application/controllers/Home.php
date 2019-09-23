<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['main_view'] = "admin/dashboard";

		$this->load->view('layouts/main', $data);
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
		$data['main_view'] = "admin/employee";

		$this->load->view('layouts/main', $data);
	}

	public function add_cars()
	{
		$data['main_view'] = "admin/add_cars";

		$this->load->view('layouts/main', $data);
	}

	public function admin_login()
	{
		$this->load->view('admin/admin_login');
	}
}
