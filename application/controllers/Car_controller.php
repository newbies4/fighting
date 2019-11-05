<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('car_model');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
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
        	if ($this->input->post('addcarsubmit') != null) {
        		$dataArr = array(
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
        		$car_id = $this->car_model->insert_car($dataArr);

        		$data = array();
        		$files = $_FILES;
        		$fileCount = count($_FILES['carpics']['name']);
        		$pictureNames = array();

        		for ($i=0; $i < $fileCount; $i++) {
        			if ($_FILES['carpics']['error'][$i] == UPLOAD_ERR_OK) {

						$_FILES['carpics']['name'] = $files['carpics']['name'][$i];
						$_FILES['carpics']['type'] = $files['carpics']['type'][$i];
						$_FILES['carpics']['tmp_name'] = $files['carpics']['tmp_name'][$i];
						$_FILES['carpics']['error'] = $files['carpics']['error'][$i];
						$_FILES['carpics']['size'] = $files['carpics']['size'][$i];

						$config['upload_path'] = './assets/img/cars';
		                $config['allowed_types']= 'png|jpg|jpeg';
		                $config['max_size'] = 0;
		                $config['max_width'] = 0;
		                $config['max_height'] = 0;
		                $config['remove_spaces'] = true;

		                $this->load->library('upload',$config);

		                if($this->upload->do_upload('carpics')){
							// Get data about the file
							$uploadData = $this->upload->data();
							$pictureNames[] = array(
								'car_id_fk' => $car_id,
								'car_pic_name' => $uploadData['file_name']
							);
						} else {
							// upload error
							$data['error'] = $this->upload->display_errors();
						}
        			} 
        		} // end of for loop
        		$result = $this->car_model->insert_pictures($pictureNames);
        		if ($result != false) {
        			$this->session->set_flashdata('add_car_success', 'Car successfully added.');
        			redirect('admin_controller/add_car','refresh');
        		}
        	} else {

    			var_dump('expression');
        	}














	        // If file upload form submitted
	        /*if($this->input->post('addcarsubmit') && !empty($_FILES['carpics']['name'])) {
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
	        }*/

	        // Insert to tbl_car_profile
	        /*$datas = array(
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
            }	      */  	       
    	}
        
		
	}
}
