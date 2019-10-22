<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function index()
	{
		$data['main_view'] = "user/home";

		$this->load->view('layouts/main_user', $data);
	}

	public function user_account()
	{
		$data['main_view'] = "user/user_account";

		$this->load->view('layouts/main_user', $data);
	}


	public function login()
	{
		$data['main_view'] = "user/login_user";

		$this->load->view('layouts/main_user', $data);
	}
	public function team()
	{
		$data['main_view'] = "user/team";

		$this->load->view('layouts/main_user', $data);
	}

}