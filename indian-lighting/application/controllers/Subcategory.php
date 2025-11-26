<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }
	
	public function add()
{
    $image = ''; // Initialize $image variable with a default value

  if ($this->input->post()) {
    $catArrays = $this->input->post('category_id'); // This is an array
    $subcatArrays = $this->input->post('subcategory_id');
    $subcategory_name = $this->input->post('subcategory_name');
    $slug_url = $this->input->post('slug_url');
    $subcategory_description = $this->input->post('subcategory_description');
    $subcategory_img = $this->input->post('subcategory_img');

    // Convert category_id array to a comma-separated string
    $categoryList = is_array($catArrays) ? implode(',', $catArrays) : '';

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = '*';

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    $image = '';
    if ($this->upload->do_upload('subcategory_img')) {
        $data = array('upload_data' => $this->upload->data());
        $image = $data['upload_data']['file_name'];
    }

    $dataArray = array(
        'id' => $categoryList,
        'category_id' => $categoryList, // Now it's a string
        'subcategory_name' => $subcategory_name,
        'slug_url' => $slug_url,
        'subcategory_description' => $subcategory_description,
        'subcategory_img' => $image,
    );

    if ($this->common_model->insert_data('subcategory', $dataArray)) {
        redirect(base_url('subcategory/manage'));
    } else {
        echo 'error';
    }
}


    // Fetch Categories for Dropdown
    $data['categories'] = $this->db->get('category')->result();

    // Load Views
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_subcategory', $data);
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
		//print_r($subcategory_details);die;
       
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
    // $data['cat'] = $this->common_model->get_cat();
    // $data['market'] = $this->common_model->get_mws();
//print_r($data['cat']);die();
    // Fetch BOQ product count
    // $boqCount = $this->common_model->fetch_boq_product_count($session_id);
    // $bulkCount = $this->common_model->fetch_bulk_product_count($session_id);
    //     $data['bulkCount'] = $bulkCount;
    // Pass data to the view
    $data['productdata'] = $productdata;
    $data['relatedProducts'] = $relatedProducts;
    // $data['boqCount'] = $boqCount;
    
    // Load views
    	$data['categories'] = $this->db->get('category')->result(); 
    $this->load->view('home/header', $data);
    $this->load->view('home/single',isset($data) ? $data : NULL); 
    $this->load->view('home/footer');
}

	
	
function edit_subcategory($id)
{
    $image = '';
    if ($this->input->post()) {
        
         $catArrays = $this->input->post('category_id');
    $subcategory_name = $this->input->post('subcategory_name');
    $slug_url = $this->input->post('slug_url');
    $subcategory_description = $this->input->post('subcategory_description');
    $subcategory_img = $this->input->post('subcategory_img');

    $List = implode(',', $catArrays);
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = '*';

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('subcategory_img')) {
        $data = array('upload_data' => $this->upload->data());
        $image = $data['upload_data']['file_name'];
    }
    
    if($image==""){
    $dataArray = array(
        'category_id' => $List,
        'subcategory_name' => $subcategory_name,
        'slug_url' => $slug_url,
        'subcategory_description' => $subcategory_description
      
    );
    }else{
         $dataArray = array(
        'category_id' => $List,
        'subcategory_name' => $subcategory_name,
        'slug_url' => $slug_url,
        'subcategory_description' => $subcategory_description,
        'subcategory_img' => $image
    );
    }
        // $dataArray = $this->input->post();

        // // Handle file upload
        // if (!empty($_FILES['subcategory_img']['name'])) {
        //     $config['upload_path'] = './uploads/';
        //     $config['allowed_types'] = 'gif|jpg|png';
        //     $config['max_size'] = 2048; // 2MB
        //     $this->load->library('upload', $config);

        //     if ($this->upload->do_upload('subcategory_img')) {
        //         $uploadData = $this->upload->data();
        //         $dataArray['subcategory_img'] = $uploadData['file_name'];
        //     } else {
        //         echo $this->upload->display_errors();
        //         return;
        //     }
        // }
// print_r($dataArray);
// $this->common_model->update_data('subcategory', 'id', $id, $dataArray);
// echo $this->db->last_query();
// die;
        if ($this->common_model->update_data('subcategory', 'id', $id, $dataArray) == TRUE) {
           // echo 'Successfully edited';
            redirect(base_url('subcategory/manage'));
        } else {
            echo 'Error while edit';
        }
    }

    $data['categories'] = $this->db->get('category')->result();
    $data['subcategory'] = $this->db->where('id', $id)->get('subcategory')->row();
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_subcategory', $data);
    $this->load->view('admin/footer');
}

	
	
	function delete_subcategory ($id){
		/* $delete = $this->db->where('listing_id', $listing_id)->delete('tbl_listings');
			
			if($delete == true){
				echo 'successfully deleted';
			redirect(base_url('listings/add'));
			}else{
				echo 'error while delete';
			} */
			$delete = $this->common_model->delete_data('subcategory','id', $id);
		
			if($delete == true){
				//echo 'successfully deleted';
			redirect(base_url('subcategory/manage'));
			}else{
				//echo 'error while delete';
			} 
			
			
		}
	
	
	
	
	
	function manage()
	{
		
		$data['subcategory'] = $this->db->get('subcategory')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/manage_subcategory', $data);
		$this->load->view('admin/footer');
	
	}
	
	
}
