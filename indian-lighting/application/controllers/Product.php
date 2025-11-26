<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }
public function add()
{
    $image = '';
    $image1 = '';
    $image2 = '';
    $image3 = '';
    if ($this->input->post()) {
        $dataArray = $this->input->post();
        $catArrays = $this->input->post('category_id');
        $subcatArrays = $this->input->post('subcategories_id');
          // Check if these are arrays, if not, set them to empty arrays
    if (!is_array($catArrays)) {
        $catArrays = [];  // Default to an empty array if no selection
    }

    if (!is_array($subcatArrays)) {
        $subcatArrays = [];  // Default to an empty array if no selection
    }

    // Convert arrays to comma-separated strings
  $List = implode(',', $catArrays);  // Convert category array to string
$List1 = implode(',', $subcatArrays);  // Convert subcategory array to string


        $product_name = $this->input->post('product_name');
        $pro_manufac = $this->input->post('pro_manufac');
        $pro_material = $this->input->post('pro_material');
        $pro_color = $this->input->post('pro_color');
        $pro_size = $this->input->post('pro_size');
        $pro_indoor = $this->input->post('pro_indoor');
        $selling_price = $this->input->post('selling_price');
        $cross_price = $this->input->post('cross_price');
        
        // $model_no = $this->input->post('model_no');
        // $product_type = $this->input->post('product_type');
        // $ht = $this->input->post('ht');
        // $len = $this->input->post('len');
        // $wid = $this->input->post('wid');
        // $material = $this->input->post('material');
        // $foam = $this->input->post('foam');
        // $strmtr = $this->input->post('strmtr');
        // $support = $this->input->post('support');
        $product_description = $this->input->post('product_description');
        $product_specification = $this->input->post('product_specification');

        unset($dataArray['submit']);
        if (isset($dataArray['product_colour']) && is_array($dataArray['product_colour'])) {
            $dataArray['product_colour'] = implode(',', $dataArray['product_colour']);
        }
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('product_img')) {
            $data = array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
        }
        if ($this->upload->do_upload('product_img1')) {
            $data1 = array('upload_data' => $this->upload->data());
            $image1 = $data1['upload_data']['file_name'];
        }
        if ($this->upload->do_upload('product_img2')) {
            $data2 = array('upload_data' => $this->upload->data());
            $image2 = $data2['upload_data']['file_name'];
        }
        if ($this->upload->do_upload('product_img3')) {
            $data3 = array('upload_data' => $this->upload->data());
            $image3 = $data3['upload_data']['file_name'];
        }

        $dataArray = array(
            'category_id' => $List,
            'subcategory_id' => $List,
            'product_name' => $product_name,
            'pro_manufac' => $pro_manufac,
            'pro_material' => $pro_material,
            'pro_color' => $pro_color,
            'selling_price' => $selling_price,
            'cross_price' => $cross_price,
            // 'product_type' => $product_type,
            // 'model_no' => $model_no,
            // 'ht' => $ht,
            // 'len' => $len,
            // 'wid' => $wid,
            // 'strmtr' => $strmtr,
            // 'support' => $support,
            // 'foam' => $foam,
            'product_description' => $product_description,
            'product_specification' => $product_specification,
            // 'material' => $material,
            'product_img' => $image,
            'product_img1' => $image1,
            'product_img2' => $image2,
            'product_img3' => $image3,
            // 'allow_boq' => $allow_boq
        );

    if ($this->common_model->insert_data('product', $dataArray)) {
            $product_id = $this->db->insert_id(); 

            redirect(base_url('product/manage')); 
        } else {
            echo 'Error inserting data into product table.';
        }
    }

    $data['categories'] = $this->db->get('category')->result();
    $data['subcategories'] = $this->db->get('subcategory')->result();

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_product', $data);
    $this->load->view('admin/footer');
}

public function test()
{
     $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    // $this->load->view('admin/edit_products', $data);
    $this->load->view('admin/footer'); 
}

function edit_product($product_id)
{
    // Fetch existing product data
    $data['product'] = $this->db->where('product_id', $product_id)->get('product')->result();
    // $data['slab'] = $this->db->where('product_id', $product_id)->get('slabs')->result();

     //  print_r($data['slab']);die();
    $data['categories'] = $this->common_model->get_cat();
    $data['subcategories'] = $this->common_model->getSubcategories();
    if ($this->input->post()) {
        // Post data handling
        $dataArray = $this->input->post();
        $catArrays = $this->input->post('category_id');
        $subcatArrays = $this->input->post('subcategory_id');

        $List = implode(',', $catArrays);
        $List1 = implode(',', $subcatArrays);
        // File upload configuration
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        // Handle file uploads
        $upload_errors = array();
        $upload_data = array();

        // Function to handle individual uploads
         function handle_upload($field_name, &$target) {
        if (!empty($_FILES[$field_name]['name'])) {
            if ($this->upload->do_upload($field_name)) {
                $upload_data = $this->upload->data();
                $target = $upload_data['file_name'];
            } else {
                $upload_errors[] = $this->upload->display_errors();
            }
        }
    }

        // Handle each file upload
        handle_upload('product_img', $dataArray['product_img']);
        handle_upload('product_img1', $dataArray['product_img1']);
        handle_upload('product_img2', $dataArray['product_img2']);
        handle_upload('product_img3', $dataArray['product_img3']);

        // Check for any upload errors
        if (!empty($upload_errors)) {
            // Handle errors (you can customize this part based on your application needs)
            foreach ($upload_errors as $error) {
                echo $error;
            }
            return;
        }

        // Prepare the data array for database update
        $dataArray = array(
            'category_id' => $List,
            'subcategory_id' => $List1,
            'product_name' => $this->input->post('product_name'),
            'product_type' => $this->input->post('product_type'),
            'model_no' => $this->input->post('model_no'),
            // 'ht' => $this->input->post('ht'),
            // 'len' => $this->input->post('len'),
            // 'wid' => $this->input->post('wid'),
            // 'strmtr' => $this->input->post('strmtr'),
            // 'support' => $this->input->post('support'),
            // 'foam' => $this->input->post('foam'),
            'product_description' => $this->input->post('product_description'),
            'product_specification' => $this->input->post('product_specification'),
            // 'material' => $this->input->post('material'),
            'product_img' => $dataArray['product_img'],
            'product_img1' => $dataArray['product_img1'],
            'product_img2' => $dataArray['product_img2'],
            'product_img3' => $dataArray['product_img3'],
            'allow_boq' => $this->input->post('allow_boq') ? 1 : 0
        );
        // Update database
        if ($this->common_model->update_data('product', 'product_id', $product_id, $dataArray)) {
            redirect(base_url('product/manage'));
        } else {
            echo 'Error while editing product.';
        }
    }

    // Load views
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_products', $data);
    $this->load->view('admin/footer');
    
}
	function delete_product ($product_id){
		/* $delete = $this->db->where('listing_id', $listing_id)->delete('tbl_listings');
			
			if($delete == true){
				echo 'successfully deleted';
			redirect(base_url('listings/add'));
			}else{
				echo 'error while delete';
			} */
			$delete = $this->common_model->delete_data('product','product_id', $product_id);
		
			if($delete == true){
				//echo 'successfully deleted';
			redirect(base_url('product/manage'));
			}else{
				echo 'error while delete';
			} 
			
			
		}
	

function manage()
{
    $this->db->select('product.*, GROUP_CONCAT(category.category_name SEPARATOR ", ") as category_names, GROUP_CONCAT(subcategory.subcategory_name SEPARATOR ", ") as subcategory_names');
    $this->db->from('product');
    $this->db->join('subcategory', 'FIND_IN_SET(subcategory.id, product.subcategory_id)', 'left');
    $this->db->join('category', 'FIND_IN_SET(category.id, product.category_id)', 'left');
    $this->db->group_by('product.product_id');
    $this->db->order_by('product.product_id', 'DESC'); 
    $data['product'] = $this->db->get()->result();
    
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/manage_product', $data);
    $this->load->view('admin/footer');
}

	
}
