<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserve_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        // $this->load->library('form_validation');
        $this->load->model('reserve_model');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }


    // ====================== ADMIN SIDE ======================

    public function show_reservation()
    {
        $data['fetch_data'] = $this->reserve_model->showReservation();
        $data['main_view'] = "admin/reservation";
        $this->load->view('layouts/main', $data);
    }

    public function view_details($id)
    {
        if ($id != null) {
            
        }
    }

    public function update_reservation_status($id, $action)
    {
        if ($id != null && $action != null) {
            $this->reserve_model->updateReservationStatus($id, $action);
            if ($action == 'confirmed'){
                $this->session->set_flashdata('reserve_message', 'Reservation confirmed');
            } elseif ($action == 'declined') {
                $this->session->set_flashdata('reserve_message', 'Reservation declined');
            }
            redirect('reserve_controller/show_reservation', 'refresh');
        }
    }


    // ====================== USER SIDE ======================

    public function remove_storeroom($id)
    {
        $this->reserve_model->removeStoreroom($id);
        $this->show_storeroom();
    }

    public function add_to_reserve()
    {
        $custid = $this->session->userdata('customerid');
        $totalpayment = $this->reserve_model->getTotalPayment($custid);
        $dates = $this->reserve_model->getDates($custid);
        $start = $dates->start;
        $end = $dates->end;
        $dataArr = array(
            'customer_id_fk' => $custid,
            'total_payment' => $totalpayment,
            'start_date' => $start,
            'end_date' => $end
        );
        $reserveid = $this->reserve_model->addToReserve($dataArr);
        $this->reserve_model->addToReserveDetails($reserveid, $custid);
        $this->reserve_model->deleteStoreroom($custid);
        
        $data['fetch_data'] = $this->reserve_model->getAllStoreroom();
        $data['total'] = $this->reserve_model->getTotalPayment($custid);
        $data['main_view'] = "user/reserve_success_message";
        $this->load->view('layouts/main_user', $data);
    }

    public function add_to_storeroom()
    {
        if (isset($_SESSION['customerid'])) {
            echo $this->input->post('carid');
            echo $this->input->post('from');
            echo $this->input->post('to');
            echo $this->session->userdata('customerid');

            $data = array(
                'car_id_fk' => $this->input->post('carid'),
                'start' => $this->input->post('from'),
                'end' => $this->input->post('to'),
                'customer_id_fk' => $this->session->userdata('customerid')
            );

            $this->reserve_model->addToStoreroom($data);
            $data['main_view'] = "user/storeroom_redirect";
            $this->load->view('layouts/main_user', $data);
        }
    }

    // ========================================================================================= //
    //                                          FRONT END 
	public function show_storeroom()
	{
        // fetch from database
        $data['fetch_data'] = $this->reserve_model->getAllStoreroom();
        $data['total'] = $this->reserve_model->getTotalPayment($_SESSION['customerid']);

        $data['main_view'] = "user/user_account_storeroom";

        $this->load->view('layouts/main_user', $data);
        
	}

    public function edit_employee($id=null)
    {

        $data['employee'] = $this->employee_model->get_employee_by_id($id);
        //var_dump($data['employee']);
        $data['main_view'] = "admin/edit_employee";
        $this->load->view('layouts/main', $data);
    }

    // ========================================================================================= //
    //                                          BACK END 
	public function add_employee()
	{
        // Setting up the rules
        // $this->form_validation->set_rules('input name', 'Display Error Name', 'validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('contactnumber', 'Contact Number', 'required|min_length[7]|max_length[15]|numeric');

		if ($this->form_validation->run() == FALSE)
        {
            // error
            $data['main_view'] = "admin/add_employee";

			$this->load->view('layouts/main', $data);
        }
        else
        {
            // Succcess

        	$data = array(
                // database column name => input field name
        		'first_name' => $this->input->post('firstname'),
				'middle_name' => $this->input->post('middlename'),
				'last_name' => $this->input->post('lastname'),
				'contact' => $this->input->post('contactnumber')
        	);        
            $this->load->model('employee_model');

            $result = $this->employee_model->insert_data($data);
            $this->session->set_flashdata('add_employee_success', 'Employee successfully added.');
            redirect('admin_controller/add_employee');
        }
	}

    public function update_employee()
    {
        // Setting up the rules
        $this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('contactnumber', 'Contact Number', 'required|min_length[7]|max_length[15]|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            $data['employee'] = array(
                'id' => $this->input->post('id'),
                'first_name' => $this->input->post('firstname'),
                'middle_name' => $this->input->post('middlename'),
                'last_name' => $this->input->post('lastname'),
                'contact' => $this->input->post('contactnumber')
            );
            var_dump($data['employee']);
            $data['main_view'] = "admin/edit_employee";

            $this->load->view('layouts/main', $data);
        }
        else
        {
            $data = array(
                'id' => $this->input->post('id'),
                'first_name' => $this->input->post('firstname'),
                'middle_name' => $this->input->post('middlename'),
                'last_name' => $this->input->post('lastname'),
                'contact' => $this->input->post('contactnumber')
            );

            $this->load->model('Employee_model');

            $result = $this->Employee_model->update_data($data);
            $this->session->set_flashdata('update_employee_success', 'Employee successfully updated.');
            redirect('employee_controller/show');
        }
    }

    public function delete_employee($id) {
        $result = $this->employee_model->delete_employee($id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record deleted successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Faill to delete record');
        }
        redirect('employee_controller/show');
    }
}
