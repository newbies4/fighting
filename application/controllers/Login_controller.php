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
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');


		if ($this->form_validation->run() == FALSE)
        {

			
			$this->load->view('layouts/header');

			$this->load->view('user/login_user'); 
			$this->load->view('layouts/footer'); 
        } else {
        	$this->load->model('login_model');

			
        	
        	$data = array(
        		'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
        	);
			$data['fetch_data'] = $this->login_model->user_login($data);

			if($data['fetch_data']->num_rows() == 1) {
				
				$rows = $data['fetch_data']->row();
				$sess_data = array(
					'username' => $rows->username,
					'type' => $rows->user_type,
					'logged_in' => TRUE
				);
				if ($data['fetch_data']->row()->user_type == 'customer')
				{
					$sess_data = array_merge($sess_data, array('customerid' => $rows->customer_id_fk,
																	'customername' => $rows->name
																));

				}
				$this->session->set_userdata($sess_data);
				redirect('user_controller/index', 'refresh');
			} else {
				
				$this->session->set_flashdata('login_failed', 'Login failed, check your username or password.');
				$this->load->view('layouts/header');

				$this->load->view('user/login_user'); 
				$this->load->view('layouts/footer'); 

			}
		}
	}

	public function admin_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]');


		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('layouts/header');
			$this->load->view('admin/admin_login');
        }
        else
        {
        	$this->load->model('login_model');
        	
        	$data = array(
        		'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
        	);
			$data['fetch_data'] = $this->login_model->admin_login($data);

			if($data['fetch_data']->num_rows() == 1) {
				$rows = $data['fetch_data']->row();
				$sess_data = array(
					'username' => $rows->username,
					'type' => 'admin',
					'logged_in' => TRUE
				);
				$this->session->set_userdata($sess_data);
				redirect('admin_controller');
			} else {
				$this->session->set_flashdata('login_failed', 'Login failed, check your username or password.');
				redirect('admin_controller/admin_login');

			}
		}
	}
}
