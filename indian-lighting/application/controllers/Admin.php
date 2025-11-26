<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Ensure the common_model is loaded
        $this->load->model('common_model');
    }

    public function index() {
        // Check if the request is a POST request
        if ($this->input->post()) {
            // Retrieve POST data
            $dataArray = $this->input->post();
            $uname = $this->input->post('email');
            $newPass = $this->input->post('password');
            
            // Unset the password from the dataArray for validation
            unset($dataArray['password']);

            // Check credentials using the common_model
            $result = $this->common_model->check_where($uname,  $newPass);
           $data['banner'] = $this->common_model->get_all_data('banner');

    // Debugging: Print fetched banners
    // echo "<pre>";
    // print_r($data['banner']);
    // echo "</pre>";
    // die();

    $this->load->view('frontend/header');
    $this->load->view('frontend/home', $data);
    $this->load->view('frontend/footer');
}
        $this->load->view('admin/login');
    }
    

public function add_banner()
	{
		/* $this->form_validation->set_rules('email', 'email', 'required');
		
		if($this->form_validation->run() == true ){
		$dataArray = $this->input->post();
		
		$insert = $this->db->insert ('tbl_realtors', $dataArray);
		
		if($insert == true){
			echo 'Success';
			redirect(base_url('realtor/manage'));
		}else{
			echo 'error';
		}
		
		}
	 */
		if ($this->input->post()){
				//print_r($_POST);die;
				$dataArray = $this->input->post();
				
       
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = '*';
                

                $this->load->library('upload', $config);
				$this->upload->initialize($config);
                
				if ( ! $this->upload->do_upload('banner_img'))
				{
					$image = '';
				}
				
                else
                {
                        $data = array('upload_data' => $this->upload->data());

						$image = $data['upload_data']['file_name'];   
				}	
			
				$dataArray += array('banner_img' => $image); 
			
				
				if ($this->common_model->insert_data('banner', $dataArray) == TRUE ){
			
					echo 'success';
								redirect(base_url('admin/list_banner'));

				}else{
					
					echo 'failed';
				}
			}
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/add_banner');
		$this->load->view('admin/footer');
	}

	
public function edit_banner($id)
{
    if ($this->input->post()) {
        $dataArray = $this->input->post();

        // Remove old_banner_img from dataArray (it should not be saved in the database)
        unset($dataArray['old_banner_img']);

        // Handle Image Upload
        if (!empty($_FILES['banner_img']['name'])) {
            $config['upload_path']   = './uploads/'; // Upload directory
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Allowed file types
            $config['file_name']     = time() . '_' . $_FILES['banner_img']['name']; // Rename file to avoid conflicts

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('banner_img')) {
                $uploadData = $this->upload->data();
                $dataArray['banner_img'] = $uploadData['file_name']; // Save new image name in the database

                // Delete old image if a new one is uploaded
                $old_img = $this->input->post('old_banner_img');
                if (!empty($old_img) && file_exists('./uploads/' . $old_img)) {
                    unlink('./uploads/' . $old_img);
                }
            } else {
                echo $this->upload->display_errors(); // Show upload errors
                return;
            }
        }

        // Update the banner data
        if ($this->common_model->update_data('banner', 'id', $id, $dataArray)) {
            $this->session->set_flashdata('success', 'Banner successfully edited.');
            redirect(base_url('admin/list_banner'));
        } else {
            $this->session->set_flashdata('error', 'Error while editing.');
        }
    }

    // Fetch banner data
    $data['banner'] = $this->db->where('id', $id)->get('banner')->result();

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_banner', $data);
    $this->load->view('admin/footer');
}
	
	
	function delete_banner ($id){
		/* $delete = $this->db->where('realtor_id', $realtor_id)->delete('tbl_realtors');
			
			if($delete == true){
				echo 'successfully deleted';
			redirect(base_url('realtor/manage'));
			}else{
				echo 'error while delete';
			} */
			
		 $delete = $this->common_model->delete_data('banner','id', $id);
		
			if($delete == true){
				echo 'successfully deleted';
			redirect(base_url('admin/list_banner'));
			}else{
				echo 'error while delete';
			} 
			
		}
		
	
	
	
	function list_banner()
		{
		
			$data['banner'] = $this->db->get('banner')->result();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/list_banner', $data);
			$this->load->view('admin/footer');
	
		}



    public function dashboard() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
      public function category() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }



}
