<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('car_model');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    }

    public function show($start = 0)
    {
    	$this->load->library('pagination');

        $config['base_url'] = base_url().'car_controller/show/';
        $config['total_rows'] = $this->car_model->get_count();
        $config['per_page'] = 5;

        $config['full_tag_open'] = '<ul class="pagination justify-content">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li page-item">';
        $config['first_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        // fetch from database
        $data['fetch_data'] = $this->car_model->fetch_data($config['per_page'], $start);


    	$data['main_view'] = "admin/cars";

		$this->load->view('layouts/main', $data);
    }

    public function edit_availability($id=null)
    {
    	if ($id != null) {
    		$this->car_model->editAvailability($id);
    		redirect('car_controller/show', 'refresh');
    	}
    }

    public function edit_car_details($id=null)
    {

        $data['car'] = $this->car_model->get_car_by_id($id);
        //var_dump($data['employee']);
        $data['main_view'] = "admin/edit_car_details";
        $this->load->view('layouts/main', $data);
    }

    public function edit_car_pictures($id=null)
    {

        //$data['car'] = $this->car_model->get_car_by_id($id);
        //var_dump($data['employee']);
        $data['car_names'] = $this->car_model->getPictureNames($id);       
        $data['main_view'] = "admin/edit_car_pictures";
        $this->session->set_flashdata('car_id', $id);
        $this->load->view('layouts/main', $data);
    }


    public function index()
    {
    	redirect('admin_controller/add_car', 'refresh');
    }

    public function add_car()
    {
    	$data['main_view'] = "admin/add_cars";
		$this->load->view('layouts/main', $data);
    }

    public function add_car_picture()
    {
    	$data['main_view'] = "admin/add_car_picture";
		$this->load->view('layouts/main', $data);
    }

    public function edit_car_data()
    {
    	//echo '<script type="text/javascript">alert("your alert);</script>';
    	// Setting up the rules
		$this->form_validation->set_rules('owner', 'Car Owner', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('model', 'Model', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('brand', 'Brand', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('type', 'Type', 'required|min_length[2]|max_length[15]');
		$this->form_validation->set_rules('seats', 'Seats', 'required|integer');
		$this->form_validation->set_rules('color', 'Color', 'required');
		$this->form_validation->set_rules('platenumber', 'Platenumber', 'required|alpha_numeric');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric');
		$this->form_validation->set_rules('fuelcapacity', 'Fuelcapacity', 'required');
		$this->form_validation->set_rules('gastype', 'Gastype', 'required');
		$this->form_validation->set_rules('driver', 'Driver', 'required');
		$this->form_validation->set_rules('transmission', 'Transmission', 'required');
		$this->form_validation->set_rules('insurance', 'Insurance', 'required');
		$id = $this->input->post('carid');
		if ($this->form_validation->run() == FALSE) {
			//echo '<script type="text/javascript">alert("your alert);</script>';
			// $this->edit_car($id);
			$data['main_view'] = "admin/edit_car";
        	$this->load->view('layouts/main', $data);
        } else {
    		$dataArr = array(
    			'car_id' => $this->input->post('carid'),		
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
    		$result = $this->car_model->update_data($dataArr);
    		// $this->session->set_flashdata('car_id', $this->input->post('carid'));
    		if ($result) {
    			$this->session->set_flashdata('edit_car_message', 'Car updated successfully.');
    		} else {
    			$this->session->set_flashdata('edit_car_message', 'Car update failed.');
    		}
			redirect('car_controller/show', 'refresh');
    	}

    		/*$data['main_view'] = "admin/test";
			$this->load->view('layouts/main', $data);*/
	}

	public function delete_car($id=null)
	{
		if ($id != null) {
			$this->db->where('id', $id);
			$this->db->delete('tbl_employee');
			if ($this->db->affected_rows() > 0){
				return true;
			} else {
				return false;
			}
		}
	}

	public function add_car_data()
	{
		// Setting up the rules
		$this->form_validation->set_rules('owner', 'Car Owner', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('model', 'Model', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('brand', 'Brand', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('type', 'Type', 'required|min_length[2]|max_length[15]');
		$this->form_validation->set_rules('seats', 'Seats', 'required|integer');
		$this->form_validation->set_rules('color', 'Color', 'required');
		$this->form_validation->set_rules('platenumber', 'Platenumber', 'required|alpha_numeric');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric');
		$this->form_validation->set_rules('fuelcapacity', 'Fuelcapacity', 'required');
		$this->form_validation->set_rules('gastype', 'Gastype', 'required');
		$this->form_validation->set_rules('driver', 'Driver', 'required');
		$this->form_validation->set_rules('transmission', 'Transmission', 'required');
		$this->form_validation->set_rules('insurance', 'Insurance', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['main_view'] = "admin/add_cars";
			$this->load->view('layouts/main', $data);
        } else {
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
    		$this->session->set_flashdata('car_id', $car_id);
    		$data['main_view'] = "admin/add_car_picture";
			$this->load->view('layouts/main', $data);

    		/*$data = array();
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
    		}*/














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

	public function edit_pictures()
	{
		$fileCount = count($_FILES);
		DEFINE('arrayIndex', array('front', 'back', 'interior'));
		$files = $_FILES;
		//var_dump(array_keys($_FILES));
		$data = array();
		$error = null;
		$pictureNames = array();
		// var_dump($_FILES[1]);
		$config['upload_path']          = './assets/img/cars';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['overwrite']           	= TRUE;

        $this->load->library('upload');

        for ($i=0; $i < 3; $i++) {
        	
        	$config['file_name'] = arrayIndex[$i] . '-car-img-' . $this->input->post('carid') . ($i + 1);
        	$this->upload->initialize($config);

        	if ( !$this->upload->do_upload(arrayIndex[$i])) {
            	// $data = array('error' => $this->upload->display_errors('<p style="color: red;">', '</p>'));
            	$error .= $this->upload->display_errors('<p style="color: red;">', '</p>');
            // $this->load->view('admin/test', $data);
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            array_push($pictureNames, array('car_id_fk' => $this->input->post('carid'),
					'car_pic_name' => $data['upload_data']['file_name']));
	            echo "<script> console.log('yah')</script>";
	        }
        }

        if (isset($error)) {
/*
        	for($i=0; $i < count($pictureNames); $i++) {
        		unlink('./assets/img/cars/'.$pictureNames[$i]['car_pic_name']);
        	}*/
        	$this->session->set_flashdata('car_id', $this->input->post('carid'));
        	$data['car_names'] = $this->car_model->getPictureNames($this->input->post('carid'));  
        	$data['main_view'] = "admin/edit_car_pictures";
        	$data['error'] = $error;
			$this->load->view('layouts/main', $data);
        } else {
        	// var_dump($pictureNames);
        	$this->car_model->update_pictures($pictureNames);
        	/*$data['main_view'] = "admin/cars";

			$this->load->view('layouts/main', $data);*/
			$this->session->set_flashdata('edit_car_message', 'Pictures updated successfully.');
			$this->show();
        }
    }

	public function add_pictures()
	{
		$fileCount = count($_FILES);
		DEFINE('arrayIndex', array('front', 'back', 'interior'));
		$files = $_FILES;
		//var_dump(array_keys($_FILES));
		$data = array();
		// $error = array();
		$error = null;
		$pictureNames = array();
		// var_dump($_FILES[1]);
		$config['upload_path']          = './assets/img/cars';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['overwrite']           	= TRUE;

        $this->load->library('upload');

        for ($i=0; $i < 3; $i++) {
        	
        	$config['file_name'] = arrayIndex[$i] . '-car-img-' . $this->input->post('carid') . ($i + 1);
        	$this->upload->initialize($config);

        	if ( !$this->upload->do_upload(arrayIndex[$i])) {
            	// $data = array('error' => $this->upload->display_errors('<p style="color: red;">', '</p>'));
            	// array_push($error, $this->upload->display_errors('<p style="color: red;">', '</p>'));
            	$error .= $this->upload->display_errors('<p style="color: red;">', '</p>');
            // $this->load->view('admin/test', $data);
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            array_push($pictureNames, array('car_id_fk' => $this->input->post('carid'),
					'car_pic_name' => $data['upload_data']['file_name']));
	        }
        }

        if (isset($error)) {

        	for($i=0; $i < count($pictureNames); $i++) {
        		unlink('./assets/img/cars/'.$pictureNames[$i]['car_pic_name']);
        	}
        	$this->session->set_flashdata('car_id', $this->input->post('carid'));
        	$data['error'] = $error;
        	$data['main_view'] = "admin/add_car_picture";
			$this->load->view('layouts/main', $data);
        } else {
        	// var_dump($pictureNames);
        	$this->car_model->insert_pictures($pictureNames);
        	$data['main_view'] = "admin/add_car_finalize";

			$this->load->view('layouts/main', $data);
			// $this->show();
        }
        // print_r($data['error']);
        // $this->load->view('admin/test', $data);

		/*echo $car_id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('front')) {
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $data = array('pictureNames' => array(
            	'car_id_fk' => $product_id,
				'car_pic_name' => $uploadData['file_name']
            ));
        }*/

		// for ($i=0; $i < $fileCount; $i++) { 
		// 	if ($_FILES[array_keys($_FILES)[$i]]['error'][$i] == UPLOAD_ERR_OK) {

		// 		$_FILES[array_keys($_FILES)[$i]]['name'] = $files[array_keys($_FILES)[$i]]['name'][$i];
		// 		$_FILES[array_keys($_FILES)[$i]]['type'] = $files[array_keys($_FILES)[$i]]['type'][$i];
		// 		$_FILES[array_keys($_FILES)[$i]]['tmp_name'] = $files[array_keys($_FILES)[$i]]['tmp_name'][$i];
		// 		$_FILES[array_keys($_FILES)[$i]]['error'] = $files[array_keys($_FILES)[$i]]['error'][$i];
		// 		$_FILES[array_keys($_FILES)[$i]]['size'] = $files[array_keys($_FILES)[$i]]['size'][$i];

		// 		$config['upload_path'] = './assets/img/cars';
  //               $config['allowed_types']= 'png|jpg|jpeg';
  //               $config['max_size'] = 0;
  //               $config['max_width'] = 0;
  //               $config['max_height'] = 0;
  //               $config['remove_spaces'] = true;

  //               $this->load->library('upload',$config);

  //               if($this->upload->do_upload('carpics')){
  //               	echo "success";
		// 			// // Get data about the file
		// 			// $uploadData = $this->upload->data();
		// 			// $pictureNames[] = array(
		// 			// 	'car_id_fk' => $car_id,
		// 			// 	'car_pic_name' => $uploadData['file_name']
		// 			// );
		// 		} else {
		// 			echo "faile";
		// 			// upload error
		// 			// $data['error'] = $this->upload->display_errors();
		// 		}
		// 	} 
		// }
	}
}
