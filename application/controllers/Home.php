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
	public function add_customer()
	{
		
		$data['main_view'] = "admin/add_customer";
		
		$this->load->view('layouts/main', $data);
	}
<<<<<<< HEAD
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
	public function fetchMemberData() 
	{
		$result = array('data' => array());

		$data = $this->model_member->fetchMemberData();
		foreach ($data as $key => $value) {
			$name = $value['fname'] . ' ' . $value['lname'];

			// button
			$buttons = '
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a type="button" onclick="editMember('.$value['id'].')" data-toggle="modal" data-target="#editMemberModal">Edit</a></li>
			    <li><a type="button" onclick="removeMember('.$value['id'].')" data-toggle="modal" data-target="#removeMemberModal">Remove</a></li>			    
			  </ul>
			</div>
			';

			$result['data'][$key] = array(
				$name,
				$value['age'],
				$value['contact'],
				$value['address'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}
=======
>>>>>>> 2fdb5952fc2234fd03d593f255d44b8f449a7242
}
