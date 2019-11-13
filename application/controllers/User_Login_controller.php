<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();      
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
			$this->load->view('user/login_user');
        }
        else
        {
        	$this->load->model('login_User_Model');
        	
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
				redirect('user_controller/index');
			} else {
				$this->session->set_flashdata('login_failed', 'Login failed, check your username or password.');
				redirect('user_controller/index'); 

			}
		}

	}
}
