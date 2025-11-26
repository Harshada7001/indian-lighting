<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('email');
        $this->load->library('session');
         $this->load->library('upload');
        $this->load->database();
        //$this->load->helper('custom'); // Load the custom helper

    }

public function index() {
   
       $this->load->model('common_model');
    $data['products'] = $this->common_model->get_all_products();
     $data['category'] = $this->common_model->get_all_category();
    $this->load->view('home/header');
    $this->load->view('home/index', isset($data) ? $data : NULL);
    $this->load->view('home/footer');
}


// public function supplier_search() {
    
//     $this->load->model('common_model');
//       $company = $this->input->get('company');
//     $product = $this->input->get('product');
//     $location = $this->input->get('location');

//     // $this->load->model('Search_model');
// // echo $this->db->last_query();die;
//     // Priority: If product is given, show product list
//     // if  (!empty($product) || !empty($location)) {
//     //          $data['category'] = $this->common_model->get_all_category();
//     //     $data['results'] = $this->common_model->search_products($product, $location);
//     //     $data['type'] = 'product';
        
//     //           $this->load->view('home/header');
//     //              $this->load->view('home/found_supplier', $data);   
//     //             //  echo "dff";
//     //             //  echo $this->db->last_query();die;
//     // // $this->load->view('home/search_results', $data);    
//     // $this->load->view('home/footer');
//     // }
//     if  (empty($product) || !empty($location)) {
//              $data['category'] = $this->common_model->get_all_category();
//         $data['results'] = $this->common_model->search_products($product, $location);
//         $data['type'] = 'product';
        
//               $this->load->view('home/header');
//                  $this->load->view('home/found_supplier', $data);   
              
//     // $this->load->view('home/search_results', $data);    
//     $this->load->view('home/footer');
//     } if  (!empty($product) || empty($location)) {
//              $data['category'] = $this->common_model->get_all_category();
//         $data['results'] = $this->common_model->search_products($product, $location);
//         $data['type'] = 'product';
        
//               $this->load->view('home/header');
//                  $this->load->view('home/found_supplier', $data);   
              
//     // $this->load->view('home/search_results', $data);    
//     $this->load->view('home/footer');
//     }  else {
//         // echo "inop";
//         // echo $this->db->last_query();die;
//         // Otherwise search by company or location
//         $data['results'] = $this->common_model->search_suppliers($company, $location);
//         $data['type'] = 'supplier';
        
                
//          $this->load->view('home/header');
//         //          $this->load->view('home/found_products', $data);   
//     $this->load->view('home/found_supplier', $data);    
//     $this->load->view('home/footer');
//     }

//     //   $this->load->model('common_model');
//     // $data['products'] = $this->common_model->get_all_products();
//     //  $data['category'] = $this->common_model->get_all_category();

//     // $this->load->view('home/index', isset($data) ? $data : NULL);

// }


// public function supplier_search() {
//     $this->load->model('common_model');

//     $company  = $this->input->get('company');
//     $product  = $this->input->get('product');
//     $location = $this->input->get('location');

//     $data['category'] = $this->common_model->get_all_category();

//     // Case 1: If product is given OR location is given → search products
//     if (!empty($product)) {
//         $data['results'] = $this->common_model->search_products($product, $location);
//         // echo "hello";
//         $data['type']    = 'product';

//     // Case 2: Otherwise → search suppliers by company or location
//     } if (!empty($company)) {
//         $data['results'] = $this->common_model->search_suppliers($product, $location);
//         //   echo "hello1";
//         $data['type']    = 'product';

//     // Case 2: Otherwise → search suppliers by company or location
//     }else {
//         $data['results'] = $this->common_model->search_suppliers($company, $location);
//         //   echo "hello2";
//         $data['type']    = 'supplier';
//     }

//     // Load views
//     $this->load->view('home/header');
//     $this->load->view('home/found_supplier', $data);
//     $this->load->view('home/footer');
// }


public function searchSuppliers()
{
   $company_name = trim((string) $this->input->get('company'));
    $category     = trim((string) $this->input->get('product'));
    $location     = trim((string) $this->input->get('location'));
error_reporting(0);
 if (empty($company_name) && !empty($category) && empty($location)) {
// $sql = "SELECT * 
//         FROM suppliers 
//         WHERE categories categoryid = '$category'";
$this->db->select('*');
$this->db->from('suppliers');
$this->db->like('categories', $category);
// $this->db->like('city', $location);
$query = $this->db->get();

// echo $this->db->last_query();die;
$result['results'] = $query->result();


}

 if (empty($company_name) && empty($category) && !empty($location)) {
$this->db->select('*');
$this->db->from('suppliers');
// $this->db->like('categoryid', $category);
$this->db->like('city', $location);// or exact match with where()
$query  = $this->db->get();
// echo $this->db->last_query();
$result['results'] = $query->result();

  $result['gensuppliers'] = $this->common_model->gensupplier_city($location);
}

 if (empty($company_name) && !empty($category) && !empty($location)) {
     
    //   $this->db->select('*');
    //     $this->db->from('suppliers');

    //     // Exact match for city
    //     if (!empty($location)) {
    //         $this->db->where('city', $location);
    //     }

    //     // Flexible match for category (partial search)
    //     if (!empty($category)) {
    //         $this->db->group_start();
    //         $this->db->like('categories', $category);   // example: "Sensors"
    //         $this->db->group_end();
    //     }

    //     $query = $this->db->get();

    //     // Debugging: print last SQL query
    //     echo $this->db->last_query(); exit;

    //     return $query->result();
     $this->db->select('*');
$this->db->from('suppliers');
// $this->db->where('city', $location);
$this->db->like('categories', $category);
$this->db->like('city', $location);// or exact match with where()
$query  = $this->db->get();
// echo $this->db->last_query();die;
$result['results'] = $query->result();
     $result['gensuppliers'] = $this->common_model->gensupplier_city($location);
// $this->db->distinct();
// $this->db->select('s.*');
// $this->db->from('suppliers s');
// $this->db->join('products_supplier ps', 's.company_name = ps.supplier_id');

// // Filter by category (exact match)
// $this->db->where('ps.categoryid', $category);

// // Filter by city (use like or exact match depending on need)
// $this->db->where('s.city', $location);  
// // or: $this->db->like('s.city', $location);

// $query = $this->db->get();
// // echo $this->db->last_query(); // Debug: shows final SQL
// $result['results'] = $query->result();

}

 if (!empty($company_name) && empty($category) && empty($location)) {
$this->db->select('*');
$this->db->from('suppliers');
// $this->db->like('categoryid', $category);
$this->db->like('company_name', $company_name);// or exact match with where()
$query  = $this->db->get();
// echo $this->db->last_query();
$result['results'] = $query->result();
}

        $this->load->view('home/header');
    $this->load->view('home/found_supplier', $result);
    $this->load->view('home/footer');
    
    
}



   public function fetch_company() {
       error_reporting(0);
        $this->load->model('common_model');
        $query = $this->input->post('query');
        $result = $this->common_model->get_company_suggestions($query);
        
    // Debug only â€” optional
    // echo "<pre>"; print_r($result); echo "</pre>";

    if (!empty($result)) {
        foreach ($result as $row) {
            echo '<div class="company_item">' . htmlspecialchars($row->company_name) . '</div>';
        }
    } else {
        echo '<div class="company_item">No results found</div>';
    }
        
        // var_dump($result);
        // foreach ($result as $row) {
          
        // }
//         if (!empty($result)) {
//     foreach ($result as $row) {
//         // your code
//           echo '<div class="company_item">'.$row->company_name.'</div>';
//     }
// } else {
//     echo "No data found.";
// }

    }

    public function fetch_product() {
               error_reporting(0);
       $this->load->model('common_model');
        $query = $this->input->post('query');
        $result = $this->common_model->get_product_suggestions($query);
        
        foreach ($result as $row) {
            echo '<div class="product_item">'. htmlspecialchars($row->product_name) .'</div>';
        }
    }

    public function fetch_location() {
        error_reporting(0);
      $this->load->model('common_model');
        $query = $this->input->post('query');
        $result = $this->common_model->get_location_suggestions($query);
        
        foreach ($result as $row) {
            echo '<div class="location_item">'.$row->city.'</div>';
        }
    }


public function ila_gurukul()
{
    $data['ila_gurukul'] = $this->common_model->get_ila_gurukul();
 $data['category'] = $this->common_model->get_all_category();
    $this->load->view('home/header', $data);
    $this->load->view('home/ila_gurukul');
    $this->load->view('home/footer');
}


public function spplier_list()
{
    
    $data['products'] = $this->common_model->get_stock_exchange_products();
     $data['suppliers'] = $this->common_model->supplier_lt();
      $data['gensuppliers'] = $this->common_model->gensupplier_lt();
       $data['category'] = $this->common_model->get_all_category();
    $data['active_ads'] = $this->common_model->getWhere('supplier_list_ads', ['status' => 1]);
//  $data['category'] = $this->common_model->get_all_category();
    $this->load->view('home/header', $data);
    $this->load->view('home/supplier_list');
    $this->load->view('home/footer');
}

public function online_store()
{
    $data['online_store'] = $this->common_model->get_online_store();
     $data['category'] = $this->common_model->get_all_category();
    $this->load->view('home/header', $data);
    $this->load->view('home/online_store');
    $this->load->view('home/footer');
}

// public function ila_gurukul()
// {
//     $data['ila_gurukul'] = $this->common_model->get_ila_gurukul();
//      $data['category'] = $this->common_model->get_all_category();
//     $this->load->view('home/header', $data);
//     $this->load->view('home/ila_gurukul');
//     $this->load->view('home/footer');
// }

public function lighting_stock_exchange()
{
    $data['lighting_stock_exchange'] = $this->common_model->get_lighting_stock_exchange();
     $data['category'] = $this->common_model->get_all_category();
    $this->load->view('home/header', $data);
    $this->load->view('home/lighting_stock_exchange');
    $this->load->view('home/footer');
}



public function supplier_details($name)
{
    
    // echo $name;
    error_reporting(0);
        // $name = $this->input->get('name');
        
            $decoded_name = urldecode($name);
    $data['suppliers'] = $this->common_model->supplier_details($decoded_name);
       $data['catlog'] = $this->common_model->supplier_catlog($decoded_name);
    $data['ads'] = $this->common_model->supplier_ads($decoded_name);
    $data['products'] = $this->common_model->get_products_by_supplier($decoded_name);
    $this->load->view('home/header');
    $this->load->view('home/supplier_details',$data);  // your static detail page
    $this->load->view('home/footer');
}

public function product_gallery($name = null)
{
    error_reporting(0);

    // Decode name
    $decoded_name = urldecode($name);

    // Load ads based on supplier name
    $data['suppliers'] = $this->common_model->supplier_details($decoded_name); // This matches your ads logic
    $data['ads'] = $this->common_model->supplier_ads($decoded_name);
    // Load categories (optional)
    $data['category'] = $this->common_model->get_all_category();

    // Load views
    $this->load->view('home/header', $data);
    $this->load->view('home/product_gallery');
    $this->load->view('home/footer');
}

public function product_detail($product_id)
{
    $product = $this->common_model->get_product_by_id($product_id);

    if (!$product) {
        show_404(); // Product not found
    }

    $data['productdata'] = [$product]; // For use in foreach

    $this->load->view('home/header', $data);
    $this->load->view('home/product_detail');
    $this->load->view('home/footer');
}

public function ilaproduct_detail($product_id)
{
    $product = $this->common_model->get_ilaproduct_by_id($product_id);

    if (!$product) {
        show_404(); // Product not found
    }

    $data['productdata'] = [$product]; // For use in foreach

    $this->load->view('home/header', $data);
    $this->load->view('home/ilaproduct_detail');
    $this->load->view('home/footer');
}

   public function all_products() {
        $data['productdata'] = $this->Product_model->get_all_active_products();
        $this->load->view('frontend/product_list', $data);
    }

public function media_gallery()
{
    $this->load->model('Common_model');
    $data['category'] = $this->common_model->get_all_category();
    $data['media_gallery'] = $this->common_model->get_media_gallery('media_gallery', 'id', 'DESC');
    $this->load->view('home/header', $data);
    $this->load->view('home/media_gallery', $data);
    $this->load->view('home/footer');
}

public function news_details()
{
    $data['news_details'] = $this->common_model->get_news_events();
    $this->load->view('home/header', $data);
    $this->load->view('home/news_details');
    $this->load->view('home/footer');
}
public function news_details_second()
{
    $data['news_details'] = $this->common_model->get_news_events();
    $this->load->view('home/header', $data);
    $this->load->view('home/news_details_second');
    $this->load->view('home/footer');
}


public function contact()
{
    $this->load->view('home/header');
    $this->load->view('home/contact');
    $this->load->view('home/footer');
}


    public function login() {
        $this->load->view('home/header');
        $this->load->view('home/login');
        $this->load->view('home/footer');
    }
  public function adminlogin() {
        $this->load->view('home/header');
        $this->load->view('home/adminlogin');
        $this->load->view('home/footer');
    }

    public function enquiry() {
        $this->load->view('home/header');
        $this->load->view('home/enquiry');
        $this->load->view('home/footer');
    }

     public function do_login() {
        // Validate inputs
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
      $username = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->common_model->check_supplierlogin($username, $password);



// if (session_status() == PHP_SESSION_NONE) {
//     session_start(); // Start PHP session
// }

if ($result) {
    // Start native PHP session if not started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
// echo $result->company_name;die;
    // Set native PHP session directly from query result
    $_SESSION['supplier_id'] = $result->supplier_id;
    $_SESSION['company'] = $result->company_name;

    // Optional: Set CI session too (if needed later in CI)
    $this->session->set_userdata('supplier_id', $result->supplier_id);
    $this->session->set_userdata('company', $result->company_name);

    // Redirect to Core PHP page
    redirect('https://kv6.c97.mytemp.website/indian-lighting/supplier/dashboard.php?company='.$result->company_name);
} else {
    redirect('home/login'); // login failed
}


//         if ($result) {
//             // Set session
//             // $this->session->set_userdata('supplier_id', $result->supplier_id);
//             // $this->session->set_userdata('company', $result->company_name);
            
//             $_SESSION['supplier_id'] = $this->session->userdata('supplier_id');
// $_SESSION['company'] = $this->session->userdata('company');
            
//             $_SESSION['company'] = $this->session->userdata('company');
//             echo "Login successful. Welcome, " . $result->company_name;
//                 redirect('https://kv6.c97.mytemp.website/indian-lighting/supplier/add_sppliers.php');
//             // redirect('dashboard'); // Optional
//         } else {  
//             redirect('home/login');
//             // echo "Invalid username or password";
//         }
//         if ($this->form_validation->run() == FALSE) {
//             $this->load->view('home/header');
//             $this->load->view('home/login');
//             $this->load->view('home/footer');

//         } else {
//             $email = $this->input->post('email');
//             $password = $this->input->post('password');

//             $user = $this->common_model->get_user_by_email($email);
// if ($user) {
//     if (
//         password_verify($password, $user->password) || 
//         $password === $user->password  // fallback for plain-text match
//     ) {
//         $this->session->set_userdata([
//             'user_id' => $user->id,
//             'user_email' => $user->email,
//             'logged_in' => TRUE
//         ]);
//         // redirect('dashboard');
//         redirect('https://kv6.c97.mytemp.website/indian-lighting/supplier/add_sppliers.php');
//     } else {
//         $this->session->set_flashdata('error', 'Invalid email or password');
//         redirect('home/login');
//     }
}
            // if ($user && password_verify($password, $user->password)) {
            //     // Save user session
            //     $this->session->set_userdata([
            //         'user_id' => $user->id,
            //         'user_email' => $user->email,
            //         'logged_in' => TRUE
            //     ]);
            //     redirect('dashboard'); // redirect to your dashboard or homepage
            // } else {
            //     $this->session->set_flashdata('error', 'Invalid email or password');
            //     redirect('home/login');
            // }
        // }
    // }
public function do_adminlogin() {
        // Validate inputs
        
           $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->common_model->check_adminlogin($username, $password);

        if ($result) {
            // Set session
            $this->session->set_userdata('admin_id', $result->id);
            $this->session->set_userdata('username', $result->username);
            echo "Login successful. Welcome, " . $result->username;
                redirect('https://kv6.c97.mytemp.website/indian-lighting/admin/dashboard.php');
            // redirect('dashboard'); // Optional
        } else {
            echo "Invalid username or password";
        }
//         $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
//         $this->form_validation->set_rules('password', 'Password', 'required|trim');

//         if ($this->form_validation->run() == FALSE) {
//             $this->load->view('home/header');
//             $this->load->view('home/login');
//             $this->load->view('home/footer');

//         } else {
//             $email = $this->input->post('email');
//             $password = $this->input->post('password');

//             $user = $this->common_model->get_user_by_email($email);
// if ($user) {
//     if (
//         password_verify($password, $user->password) || 
//         $password === $user->password  // fallback for plain-text match
//     ) {
//         $this->session->set_userdata([
//             'user_id' => $user->id,
//             'user_email' => $user->email,
//             'logged_in' => TRUE
//         ]);
//         redirect('dashboard');
//     } else {
//         $this->session->set_flashdata('error', 'Invalid email or password');
//         redirect('home/login');
//     }
// }
//             // if ($user && password_verify($password, $user->password)) {
//             //     // Save user session
//             //     $this->session->set_userdata([
//             //         'user_id' => $user->id,
//             //         'user_email' => $user->email,
//             //         'logged_in' => TRUE
//             //     ]);
//             //     redirect('dashboard'); // redirect to your dashboard or homepage
//             // } else {
//             //     $this->session->set_flashdata('error', 'Invalid email or password');
//             //     redirect('home/login');
//             // }
//         }
    }


  public function dashboard() {
    echo "working";
        redirect('home/login');
    }
    public function logout() {
        $this->session->sess_destroy();
        redirect('home/login');
    }

public function register() {
    $this->load->view('home/header');
    $this->load->view('home/registration'); // view form
    $this->load->view('home/footer');
}

// public function do_register() {
    
//      $password         = $this->input->post('password', TRUE);
//     $confirm_password = $this->input->post('confirm_password', TRUE);

//     // Check password confirmation
//     if ($password !== $confirm_password) {
//         echo "Passwords do not match!";
//         return;
//     }

//     $data = array(
//         'company_name'   => $this->input->post('company_name', TRUE),
//         'contact_person' => $this->input->post('contact_person', TRUE),
//         'email'          => $this->input->post('email', TRUE),
//         'phone'          => $this->input->post('phone', TRUE),
//         'password'       => $password,  // Consider hashing it
//         'address'        => $this->input->post('address', TRUE),
//         'city'           => $this->input->post('city', TRUE),
//         'state'          => $this->input->post('state', TRUE),
//         'pincode'        => $this->input->post('pincode', TRUE),
//         'country'        => $this->input->post('country', TRUE),
//         'website'        => $this->input->post('website', TRUE),
//         'description'    => $this->input->post('description', TRUE),
//         'created_at'     => $this->input->post('created_at', TRUE)
//     );

//     // File upload
//   $config['upload_path'] = '/home/g1g3cinrm7ey/public_html/indian-lighting/datas/';
//     $config['allowed_types'] = 'jpg|jpeg|png|gif';
//     $config['file_name']     = time() . '_' . $_FILES['logo']['name'];
    
// echo realpath(FCPATH . 'datas/');

// $path = '/home/g1g3cinrm7ey/public_html/indian-lighting/datas/';
// if (!is_dir($path)) {
//     echo "Folder does not exist";
// } else {
//     echo "Folder exists and writable: " . (is_writable($path) ? 'Yes' : 'No');
// }


//     if (!is_dir($config['upload_path'])) {
//         mkdir($config['upload_path'], 0777, true);
//     }

//     $this->load->library('upload', $config);

//     if ($this->upload->do_upload('logo')) {
//         $upload_data = $this->upload->data();
//         $data['logo'] = 'datas/' . $upload_data['file_name'];
//             echo   $data['logo'];die;
//     } else {
//     echo $this->upload->display_errors(); // ðŸ‘ˆ check this output
//         echo  $_FILES['logo']['name'];die;
//     $data['logo'] = '';
// }

//     // Save to DB
    
//     print_r($data);die;
//     if ($this->common_model->insert_supplier($data)) {
//         // echo "Registration successful!";
//         $this->db->last_query();
//         $this->session->set_flashdata('success', 'Registration successful!');
//         redirect('home/register'); 
//         // Optionally redirect: redirect('home/success');
//     } else {
//         echo "Failed to register. Try again.";
//     }
//     // if ($this->input->method() !== 'post') {
//     //     redirect('home/register');
//     // }

//     // $this->form_validation->set_rules('name', 'Name', 'required|trim');
//     // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
//     // $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
//     // $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

//     // if ($this->form_validation->run() == FALSE) {
//     //     $this->load->view('home/header');
//     //     $this->load->view('home/registration');
//     //     $this->load->view('home/footer');
//     // } else {
//     //     $data = [
//     //         'name'     => $this->input->post('name'),
//     //         'email'    => $this->input->post('email'),
//     //         'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
//     //     ];

//     //     $this->db->insert('users', $data);

//     //     $this->session->set_flashdata('success', 'Registration successful!');
//     //     redirect('home/register'); // or redirect to login if preferred
//     // }
// }


public function my_register() {
    // Step 1: Password check
    $password         = $this->input->post('password', TRUE);
    $confirm_password = $this->input->post('confirm_password', TRUE);

    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        return;
    }

    // Step 2: Prepare data
    $data = array(
        'company_name'   => $this->input->post('company_name', TRUE),
        'ila_id' => $this->input->post('ila_id', TRUE),
        'contact_person' => $this->input->post('contact_person', TRUE),
        'email'          => $this->input->post('email', TRUE),
        'phone'          => $this->input->post('phone', TRUE),
        'password'       => $password,  // Consider hashing in real use
        'address'        => $this->input->post('address', TRUE),
        'city'           => $this->input->post('city', TRUE),
        'state'          => $this->input->post('state', TRUE),
        'pincode'        => $this->input->post('pincode', TRUE),
        'country'        => $this->input->post('country', TRUE),
        'website'        => $this->input->post('website', TRUE),
        'description'    => $this->input->post('description', TRUE),
        'created_at'     => $this->input->post('created_at', TRUE)
    );

    // // Step 3: Check if file is uploaded
    // if (empty($_FILES['logo']['name'])) {
    //     echo "No file selected."; return;
    // }

    // // Step 4: Upload configuration
    // $config['upload_path']   = FCPATH . 'uploads/';//'/home/g1g3cinrm7ey/public_html/indian-lighting/datas/';
    // $config['allowed_types'] = 'jpg|jpeg|png|gif';
    // $config['file_name']     = time() . '_' . $_FILES['logo']['name'];

    // // Step 5: Create folder if it doesnâ€™t exist
    // if (!is_dir($config['upload_path'])) {
    //     mkdir($config['upload_path'], 0777, true);
    // }

    // // Step 6: Load and initialize upload library
    // $this->load->library('upload', $config);

    // Step 7: Perform upload
    // if ($this->upload->do_upload('logo')) {
    //     $upload_data = $this->upload->data();
    //     $data['logo'] = 'uploads/' . $upload_data['file_name'];  // relative path
    // } else {
    //     echo "Upload failed: " . $this->upload->display_errors();
    //     return;
    // }


print_r($data);
    // Step 8: Save to database
    if ($this->common_model->insert_supplier($data)) {
        $this->session->set_flashdata('success', 'Registration successful!');
        redirect('home/register');
    } else {
        echo "Failed to register. Try again.";
    }
}
public function uform() {
        $this->load->view('home/upload_form', array('error' => ' ' ));
    }

public function do_upload() {
    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|pdf|docx';
    $config['max_size']      = 2048; // in KB
    $config['encrypt_name']  = TRUE;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile')) {
        // Upload failed
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('home/upload_form', $error);
    } else {
        // Upload success
        $data = array('upload_data' => $this->upload->data());

        // Get uploaded file name
        $file_name = $data['upload_data']['file_name'];

        // Display or use file name
        echo "Uploaded file name: " . $file_name;

        // Optional: Load success view
        // $this->load->view('upload_success', $data);
    }
}


public function supplier_list_ads() {
    // Load your model if not already
    $this->load->model('Common_model');

    // Fetch ads
    $data['ads'] = $this->common_model->getAll('supplier_list_ads', 'id', 'DESC');

    // Load view
    $this->load->view('home/header');
    $this->load->view('home/spplier_list', $data);  // Make sure $data is passed
    $this->load->view('home/footer');
}




public function add_supplier_ads() {
    $this->load->helper('form');

    if ($this->input->post()) {
        $config['upload_path'] = './uploads/ads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $uploadData = $this->upload->data();
            $image = 'uploads/ads/' . $uploadData['file_name'];

            $data = array(
                'title' => $this->input->post('title'),
                'image' => $image,
                'link' => $this->input->post('link'),
                'status' => $this->input->post('status')
            );

            $this->common_model->insert('supplier_list_ads', $data);
            $this->session->set_flashdata('success', 'Ad added successfully!');
            redirect('admin/add_supplier_ads');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
        }
    }

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_supplier_ads');
    $this->load->view('admin/footer');
}


public function manage_supplier_ads() {
    $data['ads'] = $this->common_model->getAll('supplier_list_ads', 'id', 'DESC');
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/viewsupplierlistads', $data);
    $this->load->view('admin/footer');
}



public function insert_supplier_ads()
{
    $supplier = $this->input->post('supplier');
    $img_path = '';

    if (!empty($_FILES['img']['name'])) {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img')) {
            $data = $this->upload->data();
            $img_path = 'uploads/' . $data['file_name'];
        }
    }

    $insert_data = [
        'supplier' => $supplier,
        'img' => $img_path
    ];

    $this->common_model->insert('supplier_list_ads', $insert_data);
    redirect('admin/viewsupplierlistads');
}

public function delete_supplier_ads($id)
{
    $ad = $this->common_model->getRow('supplier_list_ads', ['id' => $id]); // ensure 'id' not 'aid'

    if (!empty($ad->img) && file_exists(FCPATH . $ad->img)) {
        unlink(FCPATH . $ad->img);
    }

    $this->common_model->delete('supplier_list_ads', ['id' => $id]);
    redirect('admin/viewsupplierlistads');
}

 // Admin: Add Gallery Image
    public function add_gallery() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/add_gallery');
        $this->load->view('admin/footer');
    }

    // Admin: Upload Handler
    public function upload_gallery() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            $image_name = 'uploads/' . $data['file_name'];

            $this->common_model->add_image($image_name);
            $this->session->set_flashdata('success', 'Image uploaded successfully.');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
        }

        redirect('admin/add_gallery');
    }

    // Admin: View All Images
    public function view_gallery() {
        $data['images'] = $this->common_model->get_all_images();
        $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
        $this->load->view('admin/view_gallery', $data);
        $this->load->view('admin/footer');
    }

    // Frontend: Show Gallery
    // public function media_gallery() {
    //      $this->load->model('Common_model'); // Load your model if not already loaded
    //     $data['images'] = $this->common_model->getAll('gallery', 'id', 'DESC');
    //     $this->load->view('home/header', $data);
    //     $this->load->view('home/media_gallery', $data);
    //     $this->load->view('home/footer');
    // }

public function delete_gallery($id)
{
    // Load model if not autoloaded
    $this->load->model('Common_model');

    // Get image filename from DB
    $gallery = $this->common_model->get_image_by_id($id);

    if ($gallery) {
        // Delete image file from folder
        $img_path = FCPATH . $gallery->img;
        if (file_exists($img_path)) {
            unlink($img_path); // delete image file
        }

        // Delete DB record
        $this->Common_model->delete_image($id);

        $this->session->set_flashdata('success', 'Image deleted successfully.');
    } else {
        $this->session->set_flashdata('error', 'Image not found.');
    }

    redirect('admin/view_gallery'); // redirect to gallery list
}




}

