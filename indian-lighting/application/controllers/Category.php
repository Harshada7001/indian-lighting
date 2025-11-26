<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }
	
	public function add()
	{
		/* $this->form_validation->set_rules('address', 'address', 'required');
		
		if($this->form_validation->run() == true ){
		$dataArray = $this->input->post();
		
		$insert = $this->db->insert ('tbl_listings', $dataArray);
		
		if($insert == true){
			echo 'Success';
			redirect(base_url('listings/manage'));
		}else{
			echo 'error';
		}
		 */
	$image = ''; // Initialize $image variable with a default value

if ($this->input->post()) {
    $catArrays = $this->input->post('category_id');
    $category_name = $this->input->post('category_name');
    $slug_url = $this->input->post('slug_url');
    $category_description = $this->input->post('category_description');
    $category_img = $this->input->post('service_img');
    $List =$catArrays;
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = '*';

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('service_img')) {
        $data = array('upload_data' => $this->upload->data());
        $image = $data['upload_data']['file_name'];
    }

    $dataArray = array(
        'id' => $List,
        'category_name' => $category_name,
        'slug_url' => $slug_url,
        'category_description' => $category_description,
        'category_img' => $image
    );

    if ($this->common_model->insert_data('category', $dataArray) == TRUE) {
        redirect(base_url('category/manage'));
    } else {
        echo 'error';
    }
}

		$data['categories'] = $this->db->get('category')->result();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/add_category',$data);
		$this->load->view('admin/footer');
		
	}
		
		
	public function detailsdata($id) {
       if(isset($_SESSION['session_id'])) {
            $session_id = $_SESSION['session_id'];
            } else {
            $_SESSION['session_id'] = rand(1,999);
            $session_id = $_SESSION['session_id'];
            }
        $this->load->model('master_model');
        //$category_details = $this->master_model->getCategoryDetails($id);
        $product_details = $this->master_model->getproductDetails($id);
		//print_r($category_details);die;
       
        //$data['category_details'] = $category_details;
        $data['product_details'] = $product_details;
		//print_r($product_details);die;
         $data['subcategories'] = $this->common_model->getSubcategories();
        $boqCount = $this->common_model->fetch_boq_product_count($session_id);
        $data['market'] = $this->common_model->get_mws();
        $data['boqCount'] = $boqCount;
		$this->load->view('home/header',$data);
        $this->load->view('home/product', $data);
		$this->load->view('home/footer');
    }
	
	public function product_detail($productId) {
    // Session handling
    if(isset($_SESSION['session_id'])) {
        $session_id = $_SESSION['session_id'];
    } else {
        $_SESSION['session_id'] = rand(1,999);
        $session_id = $_SESSION['session_id'];
    }
    
    // Load necessary models
    $this->load->model('master_model');
    $this->load->model('common_model');

    // Get data for the current product
    $productdata = $this->master_model->getproduct($productId);
   
    // Get related products
    $relatedProducts = $this->common_model->getRelatedProducts($productId);
    //echo"<pre>";print_r($relatedProducts);die();
    // Get subcategories data
    $data['subcategories'] = $this->common_model->getSubcategories();
   
//print_r($data['cat']);die();
    // Fetch BOQ product count
    
    // Pass data to the view
    $data['productdata'] = $productdata;
    $data['relatedProducts'] = $relatedProducts;
 
    
    // Load views
    $this->load->view('home/header', $data);
    $this->load->view('home/single', $data); 
    $this->load->view('home/footer');
}

	
	
function edit_category($id)
{
    $image = '';
    if ($this->input->post()) {
        
         $catArrays = $this->input->post('category_id');
    $category_name = $this->input->post('category_name');
    $slug_url = $this->input->post('slug_url');
    $category_description = $this->input->post('category_description');
    $category_img = $this->input->post('category_img');

    $List = implode(',', $catArrays);
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = '*';

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('category_img')) {
        $data = array('upload_data' => $this->upload->data());
        $image = $data['upload_data']['file_name'];
    }
    
    if($image==""){
    $dataArray = array(
        'category_id' => $List,
        'category_name' => $category_name,
        'slug_url' => $slug_url,
        'category_description' => $category_description
      
    );
    }else{
         $dataArray = array(
        'category_id' => $List,
        'category_name' => $category_name,
        'slug_url' => $slug_url,
        'category_description' => $category_description,
        'category_img' => $image
    );
    }
        // $dataArray = $this->input->post();

        // // Handle file upload
        // if (!empty($_FILES['category_img']['name'])) {
        //     $config['upload_path'] = './uploads/';
        //     $config['allowed_types'] = 'gif|jpg|png';
        //     $config['max_size'] = 2048; // 2MB
        //     $this->load->library('upload', $config);

        //     if ($this->upload->do_upload('category_img')) {
        //         $uploadData = $this->upload->data();
        //         $dataArray['category_img'] = $uploadData['file_name'];
        //     } else {
        //         echo $this->upload->display_errors();
        //         return;
        //     }
        // }
// print_r($dataArray);
// $this->common_model->update_data('category', 'id', $id, $dataArray);
// echo $this->db->last_query();
// die;
        if ($this->common_model->update_data('category', 'id', $id, $dataArray) == TRUE) {
           // echo 'Successfully edited';
            redirect(base_url('category/manage'));
        } else {
            echo 'Error while edit';
        }
    }

    $data['categories'] = $this->db->get('category')->result();
    $data['category'] = $this->db->where('id', $id)->get('category')->row();
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_category', $data);
    $this->load->view('admin/footer');
}

	function delete_category ($id){
		/* $delete = $this->db->where('listing_id', $listing_id)->delete('tbl_listings');
			
			if($delete == true){
				echo 'successfully deleted';
			redirect(base_url('listings/add'));
			}else{
				echo 'error while delete';
			} */
			$delete = $this->common_model->delete_data('category','id', $id);
		
			if($delete == true){
				//echo 'successfully deleted';
			redirect(base_url('category/manage'));
			}else{
				//echo 'error while delete';
			} 
			
			
		}
	
	
	function manage()
	{
		
		$data['category'] = $this->db->get('category')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/manage_category', $data);
		$this->load->view('admin/footer');
	
	}
	
	
}
