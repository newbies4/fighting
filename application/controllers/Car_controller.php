<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('car_model');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }

    public function generate_id() {

    	$lastid = $this->car_model->last_id();
    	if ($lastid->lastid == null) {
    		return 1;
    	} else {
	    	return intval($lastid->lastid) + 1;
    	}
    	// $result = $this->car_model->generate_id();
    	// $data['res'] = $result->row()->lastid;
    	// $data['main_view'] = "admin/test";
    	// $this->load->view('layouts/main', $data);
    }

    public function test() {    	  
    	$data['res'] = $this->generate_id();
    	$data['main_view'] = "admin/test";
    	$this->load->view('layouts/main', $data);
    }
    public function test2() {    	  
    	echo $this->input->post('owner').'1owner<br>';
		echo $this->input->post('model').'2model<br>';
		echo $this->input->post('brand').'3brand<br>';
		echo $this->input->post('type').'4type<br>';
		echo $this->input->post('seats').'5seats<br>';
		echo $this->input->post('color').'6color<br>';
		echo $this->input->post('platenumber').'7platenumber<br>';
		echo $this->input->post('price').'8price<br>';
		echo $this->input->post('fuelcapacity').'9fuelcapacity<br>';
		echo $this->input->post('gastype').'10gastype<br>';
		echo $this->input->post('driver').'11driver<br>';
		echo $this->input->post('transmission').'12transmission<br>';
		echo $this->input->post('insurance').'13insurance<br>';
    }

	public function add_car()
	{
		// Setting up the rules
		$this->form_validation->set_rules('owner', 'Car Owner', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('model', 'Model', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('brand', 'Brand', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('type', 'Type', 'required|min_length[7]|max_length[15]');
		$this->form_validation->set_rules('seats', 'Seats', 'required|integer');
		$this->form_validation->set_rules('color', 'Color', 'required');
		$this->form_validation->set_rules('platenumber', 'Platenumber', 'required|alpha_numeric');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric');
		$this->form_validation->set_rules('fuelcapacity', 'Fuelcapacity', 'required|min_length[7]|max_length[15]');
		$this->form_validation->set_rules('gastype', 'Gastype', 'required');
		$this->form_validation->set_rules('driver', 'Driver', 'required');
		$this->form_validation->set_rules('transmission', 'Transmission', 'required');
		$this->form_validation->set_rules('insurance', 'Insurance', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['main_view'] = "admin/add_cars";
			$this->load->view('layouts/main', $data);
        } else {

    		$data = array();
	        // If file upload form submitted
	        if($this->input->post('addcarsubmit') && !empty($_FILES['carpics']['name'])) {
	            $filesCount = count($_FILES['carpics']['name']);
	            for($i = 0; $i < $filesCount; $i++) {
	                $_FILES['carpic']['name']     = $_FILES['carpics']['name'][$i];
	                $_FILES['carpic']['type']     = $_FILES['carpics']['type'][$i];
	                $_FILES['carpic']['tmp_name'] = $_FILES['carpics']['tmp_name'][$i];
	                $_FILES['carpic']['error']     = $_FILES['carpics']['error'][$i];
	                $_FILES['carpic']['size']     = $_FILES['carpics']['size'][$i];
	                
	                // File upload configuration	                
	                $config['upload_path'] = './upload/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['max_size']    = '5000';	// max_size in kb

	                // Load and initialize upload library
	                $this->load->library('upload', $config);
	                // $this->upload->initialize($config);
	                
	                // Upload file to server
	                if($this->upload->do_upload('carpic')){
	                    // Uploaded file data
	                    $fileData = $this->upload->data();
	                    $uploadData[$i]['file_name'] = $fileData['file_name'];	                    
	                }
	            }
	            
	            if(!empty($uploadData)){
	                // Insert files data into the database
	                $insert = $this->car_model->insert_picture($uploadData);
	                
	                // Upload status message
	                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
	                $this->session->set_flashdata('statusMsg',$statusMsg);
	            }
	        } else {
	        	
	        	redirect('car_controller/test2');
	        }

	        // Insert to tbl_car_profile
	        $datas = array(
				'car_id' => $this->generate_id(),
        		'car_owner' => $this->input->post('owner'),
				'car_model' => $this->input->post('model'),
				'car_brand' => $this->input->post('brand'),
				'car_type' => $this->input->post('type'),
				'car_seats' => $this->input->post('seats'),
				'car_color' => $this->input->post('color'),
				'car_platenumber' => $this->input->post('platenumber'),
				'car_price' => $this->input->post('price'),			
				'car_fuel_capacity' => $this->input->post('fuelcapacity'),
				'car_gas_type' => $this->input->post('gastype'),
				'car_driver' => $this->input->post('driver'),
				'car_transmission' => $this->input->post('transmission'),
				'car_insurance' => $this->input->post('insurance')
        	);

            $result = $this->car_model->insert_data($datas);
            if ($result) {
	            $this->session->set_flashdata('add_car_success', 'Car successfully added.');
	            redirect('admin_controller/add_car');
            }
	        
	        // Get files data from the database
	        // $data['files'] = $this->file->getRows();
	        
	        // Pass the files data to view
	        // $this->load->view('upload_files/index', $data);
    	}
        
		// $data['a1'] = $this->input->post('owner');
		// $data['a2'] = $this->input->post('model');
		// $data['a3'] = $this->input->post('brand');
		// $data['a4'] = $this->input->post('type');
		// $data['a5'] = $this->input->post('seats');
		// $data['a6'] = $this->input->post('color');
		// $data['a7'] = $this->input->post('platenumber');
		// $data['a8'] = $this->input->post('price');
		// $data['a9'] = $this->input->post('fuelcapacity');
		// $data['a10'] = $this->input->post('gastype');
		// //$data['a10'] = $_POST['gastype'];
		// $data['a11'] = $this->input->post('driver');
		// $data['a12'] = $this->input->post('transmission');
		// $data['a13'] = $this->input->post('insurance');
		// $this->load->view('admin/test', $data);
		// echo $this->input->post('owner');
		// echo $this->input->post('model');
		// echo $this->input->post('brand');
		// echo $this->input->post('type');
		// echo $this->input->post('seats');
		// echo $this->input->post('color');
		// echo $this->input->post('platenumber');
		// echo $this->input->post('price');
		// echo $this->input->post('fuelcapacity');
		// echo $this->input->post('gastype');
		// echo $this->input->post('driver');
		// echo $this->input->post('transmission');
		// echo $this->input->post('insurance');

		// // Setting up the rules
		// $this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[50]');
		// $this->form_validation->set_rules('middlename', 'Middle Name', 'required|min_length[2]|max_length[50]');
		// $this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[50]');
		// $this->form_validation->set_rules('contactnumber', 'Contact Number', 'required|min_length[7]|max_length[15]|numeric');

		// if ($this->form_validation->run() == FALSE)
  //       {
  //           // $this->load->view('admin/add_employee');
  //           // redirect('Admin_controller/add_employee');
  //           $data['main_view'] = "admin/add_employee";

		// 	$this->load->view('layouts/main', $data);
  //       }
  //       else
  //       {
  //           // $this->load->view('formsuccess');

  //       	$data = array(
  //       		'first_name' => $this->input->post('firstname'),
		// 		'middle_name' => $this->input->post('middlename'),
		// 		'last_name' => $this->input->post('lastname'),
		// 		'contact' => $this->input->post('contactnumber')
  //       	);

  //           // $data['firstname'] = $this->input->post('firstname');
  //           // $data['middlename'] = $this->input->post('middlename');
  //           // $data['lastname'] = $this->input->post('lastname');
  //           // $data['contactnumber'] = $this->input->post('contactnumber');

  //           $this->load->model('Employee_model');

  //           // echo $data['firstname'];
  //           $result = $this->Employee_model->insert_data($data);
  //           $this->session->set_flashdata('add_employee_success', 'Employee successfully added.');
  //           redirect('admin_controller/add_employee');
  //       }
	// }
	}
}
