<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

     
 public function index() {
        if($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->common_model->check_login($email, $password);
            //print_r($user);die();

            if ($user) {
                $this->session->set_userdata('username', $user->fullname);
                redirect(base_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Invalid Credentials.</div>');
                redirect(base_url('admin/index'));
            }
        }

        $this->load->view('admin/login');
    }

	public function dashboard()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
		
	}
	
// 	public function list_user()
// 	{
// 	    $data['real'] = $this->db->get('users')->result();
// 		$this->load->view('admin/header');
// 		$this->load->view('admin/sidebar');
// 		$this->load->view('admin/list_user',$data);
// 		$this->load->view('admin/footer');
		
// 	}

public function list_user()
{
    // Filter the query to include only users with regtype = 2
    $this->db->where('reg_type', 2);
    $data['real'] = $this->db->get('users')->result();
    
    // Debugging: Check the query and data
   // echo $this->db->last_query(); // Outputs the last query executed
   // print_r($data['real']);die();       // Prints the data retrieved
    
    // Load the views with the filtered data
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/list_user', $data);
    $this->load->view('admin/footer');
}

public function customer_list($id)
{
   	$data['profile1'] = $this->common_model->get_profile1_by_id($id);
//print_r($data['profile1']);die();
    $data['real'] = $this->db->get('customer')->result();
//print_r($data['real']);die();

    // Load the views with the data
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/customer_list', $data);
    $this->load->view('admin/footer');
}

		public function list_commu_user()
	{
	    
	    //$this->db->where('reg_type', 1);
        $data['real'] = $this->db->get('community_profile')->result();
        
        
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/list_commu_user',$data);
		$this->load->view('admin/footer');
		
	}
	public function view_commu_profile($id)
	{
	    
	    $data['profile'] = $this->common_model->get_profile_by_id($id);

	    
	    $data['real'] = $this->db->get('customer')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/view_commu_profile',$data);
		$this->load->view('admin/footer');
		
	}


// public function view_commu_profile($cust_id = null)
// {
//     if ($cust_id !== null) {
//         $this->db->where('cust_id', $cust_id);
//     }
    
//     // Execute the query and get the result
//     $data['real'] = $this->db->get('customer')->result();
//     //print_r($data['real']);  die(); 
//     // Debugging: Check the query and data
//     //echo $this->db->last_query();  die();// Outputs the last query executed
//     //print_r($data['real']);  die();     // Prints the data retrieved
    
//     // Load the views with the data
//     $this->load->view('admin/header');
//     $this->load->view('admin/sidebar');
//     $this->load->view('admin/view_commu_profile', $data);
//     $this->load->view('admin/footer');
// }


	function delete_user ($id){
		/* $delete = $this->db->where('listing_id', $listing_id)->delete('tbl_listings');
			
			if($delete == true){
				echo 'successfully deleted';
			redirect(base_url('listings/add'));
			}else{
				echo 'error while delete';
			} */
			$delete = $this->common_model->delete_data('users','id', $id);
		
			if($delete == true){
				//echo 'successfully deleted';
			redirect(base_url('admin/list_user'));
			}else{
				echo 'error while delete';
			} 
			
			
		}
		
		
		
		
	function delete_communityuser ($id){
	
			$delete = $this->common_model->delete_data('community_profile','id', $id);
		
			if($delete == true){
				//echo 'successfully deleted';
			redirect(base_url('admin/list_commu_user'));
			}else{
				echo 'error while delete';
			} 
			
			
		}
		
		
		
		
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}    
	
}
