<?php

	class common_model extends CI_Model{
		
		//function for login
	function check_where($username, $password) {
    $this->db->select('user_id, user_name, password');
    $this->db->from('users');  // Ensure you are using the 'users' table, not 'product'
    $this->db->where('email_id', $username);
    $this->db->where('password', $password); // Assuming the password is stored as an MD5 hashf
    $query = $this->db->get();

    return $query->row();
}

 public function insert_supplier($data) {
        return $this->db->insert('suppliers', $data);
        $this->db->last_query();
    }

  public function get_company_suggestions($query) {
        // $this->db->select('DISTINCT company_name');
        // $this->db->from('suppliers');
        // $this->db->like('company_name', $query);
        
        // echo $this->db->last_query();
 $this->db->distinct();
    $this->db->select('company_name');
    $this->db->from('suppliers');
    $this->db->like('company_name', $query);
    
    $result = $this->db->get()->result();

    // For debugging
    // echo $this->db->last_query();

    return $result;



        return $this->db->get()->result();
    }
    
    
      public function search_products($product = '', $location = '') {
//         $this->db->distinct();
//         $this->db->select('suppliers.*');
//         $this->db->from('suppliers');
//         $this->db->join(
//             'products_supplier',
//             'products_supplier.supplier_id = suppliers.supplier_id',
//             'inner'
//         );

//         // Filter by product (if given)
//         // if (!empty($product)) {
//         //     $this->db->like('products_supplier.product_name', $product);
//         // }

//         // // Filter by location (if given)
//         // if (!empty($location)) {
//         //     $this->db->like('suppliers.city', $location);
//         // }else{
            
            
            
//         // }
        
//         if (!empty($product) && !empty($location)) {
//     $this->db->like('products_supplier.product_name', $product);
//     $this->db->like('suppliers.city', $location);
// }

//         $query = $this->db->get();

// $this->db->distinct();
// $this->db->select('suppliers.*');
// $this->db->from('suppliers');
// $this->db->join(
//     'products_supplier',
//     'products_supplier.supplier_id = suppliers.supplier_id',
//     'inner'
// );

// // Only apply filters if BOTH product and location are provided
// if (!empty($product) && !empty($location)) {
//     $this->db->like('products_supplier.product_name', $product);
//     $this->db->like('suppliers.city', $location);
// } else {
//     // Optionally return no results if both are not provided
//     $this->db->where('1 = 0'); // This will force the query to return nothing
// }
// $location = 'Nashik';
// $category = 'Sensors & Lighting Controllers & Lighting Automati';

// $this->db->select('*');
// $this->db->from('suppliers s');
// $this->db->join('products_supplier p', 's.company_name = p.supplier_id', 'inner');
// $this->db->where('s.city', $location);
// $this->db->where('p.category_id', $category);
// echo "ff";
// $sql="SELECT * FROM `products_supplier` WHERE `category_id` LIKE '%Sensors & Lighting Controllers & Lighting Automati%'";
// $sql = "SELECT * 
//         FROM suppliers s, products_supplier p 
//         WHERE s.company_name = p.supplier_id 
//         AND s.city = 'Nashik' 
//         AND p.category_id = 'Sensors & Lighting Controllers & Lighting Automati'";
$category = 'Sensors & Lighting Controllers & Lighting Automation';

$this->db->select('*');
$this->db->from('products_supplier');
$this->db->like('categoryid', $category); // this adds the LIKE '%...%' automatically

$query = $this->db->get();
$result = $query->result();
// $query = $this->db->query($sql); // ✅ Correct method
// $result = $query->result();



// $query = $this->db->get("SELECT * FROM `suppliers` s,products_supplier p WHERE s.`company_name`= p.supplier_id and s.`city`='Nashik' and p.category_id='Sensors & Lighting Controllers & Lighting Automati'");
// $result = $query->result();

// $this->db->select('*');
// $this->db->from('suppliers s');
// $this->db->join('products_supplier p', 's.company_name = p.supplier_id', 'inner');
// $this->db->where('s.city', $location); // e.g., 'Nashik'
// $this->db->where('p.category_id', $product); // your category string

// $query = $this->db->get();
// $result = $query->result();

// $query = $this->db->get();
//         return $query->result();
    }
    
       public function search_suppliers($company = '', $location = '') {
        $this->db->distinct();
        $this->db->select('suppliers.*');
        $this->db->from('suppliers');

        // Filter by company name (if given)
        if (!empty($company)) {
            $this->db->like('products_supplier.category_id', $company);
        }

        // Filter by location (if given)
        if (!empty($location)) {
            $this->db->like('suppliers.city', $location);
        }

        $query = $this->db->get();
        
        // echo $this->db->last_query();die;
        return $query->result();
    }
    
//      public function search_suppliers($company = '', $location = '') {
//         $this->db->select('*')->from('suppliers');
//         if (!empty($company)) {
//             $this->db->like('company_name', $company);
//         }
//         if (!empty($location)) {
//             $this->db->like('city', $location); // or use `city` if available
//         }
//         echo $this->db->last_query();die;
        
        
//         return $this->db->get()->result();
//     }

//     public function search_products($product = '',$location = '') {
//         // $this->db->select('products.*, suppliers.company_name')
//         //          ->from('products')
//         //          ->join('suppliers', 'products.supplier_id = suppliers.company_name', 'left')
//         //          ->like('products.product_name', $product);
//         // return $this->db->get()->result();
         
//     if (!empty($product)) {
//          $this->db->distinct();
//     $this->db->select('suppliers.*');
//     $this->db->from('suppliers');
//     $this->db->join('products_supplier', 'suppliers.company_name = products_supplier.supplier_id');
//         $this->db->like('products_supplier.category_id', $product);
//           echo $this->db->last_query();die;
//     $query = $this->db->get();
//     }


//  if (empty($product)) {
//         $this->db->distinct();
// $this->db->select('suppliers.*');
// $this->db->from('suppliers');
// // $this->db->join('products_supplier', 'products_supplier.supplier_id = suppliers.supplier_id');
// $this->db->like('suppliers.city', $location); // $location = "Mumbai"
// $query = $this->db->get();

// //   echo "dff";
// //                  echo $this->db->last_query();die;
// return $query->result();

//     }
//     // if (!empty($location)) {
//     //     $this->db->like('suppliers.city', $location);
//     // }
    
    
//         //   echo "dff";
//         //          echo $this->db->last_query();die;
//     // $this->db->like('products.product_name', $product); // partial match
//     //  $this->db->group_start();
//     // if (!empty($product)) {
//     //     $this->db->like('products.product_name', $product);
//     // }
//     // if (!empty($location)) {
//     //     $this->db->or_like('suppliers.city', $location);
//     //     // $this->db->or_like('suppliers.state', $location);
//     // }
//     // $this->db->group_end();
  
//     return $query->result();
    
    
   

//     }

// public function search_products($product = '', $location = '') {
//     $this->db->distinct();
//     $this->db->select('suppliers.*');
//     $this->db->from('suppliers');
//     $this->db->join('products_supplier', 'products_supplier.supplier_id = suppliers.supplier_id');

//     // Add product filter only if given
//     if (!empty($product)) {
//         $this->db->like('products_supplier.category_id', $product);
//     }

//     // Add location filter only if given
//     if (!empty($location)) {
//         $this->db->like('suppliers.city', $location);
//     }


// // $this->db->distinct();
// // $this->db->select('suppliers.*');
// // $this->db->from('suppliers');
// // // $this->db->join('products_supplier', 'products_supplier.supplier_id = suppliers.supplier_id');
// // $this->db->like('suppliers.city', 'Mumbai'); // You can replace 'Mumbai' with $location
// $query = $this->db->get();
// // echo $this->db->last_query();die;
// return $query->result();

//     // $query = $this->db->get();
//     //  echo $this->db->last_query();die;
//     // return $query->result();
// }


    public function get_product_suggestions($query) {
        // $this->db->select('DISTINCT product_name');
        // $this->db->from('products');
        // $this->db->like('product_name', $query);
        // return $this->db->get()->result();
        
         $this->db->distinct();
    $this->db->select('product_name');
    $this->db->from('products');
    $this->db->like('product_name', $query);
    
    $result = $this->db->get()->result();

    // For debugging
    // echo $this->db->last_query();

    return $result;
    }

    public function get_location_suggestions($query) {
        
           $this->db->distinct();
    $this->db->select('city');
    $this->db->from('suppliers');
    $this->db->like('city', $query);
    
    $result = $this->db->get()->result();

    // For debugging
    // echo $this->db->last_query();

    return $result;
        // $this->db->select('DISTINCT location');
        // $this->db->from('suppliers');
        // $this->db->like('location', $query);
        // return $this->db->get()->result();
    }

 public function check_supplierlogin($username, $password) {
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('suppliers');

        if ($query->num_rows() == 1) {
            return $query->row(); // return matched admin
        } else {
            return false;
        }
    }
 public function check_adminlogin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            return $query->row(); // return matched admin
        } else {
            return false;
        }
    }

public function get_stock_exchange_products()
{
    // $this->db->select('*');
    // $this->db->from('stock_exchange_products');
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    // $query = $this->db->get();

    // return $query->result();
    $this->db->select('*');
$this->db->from('stock_exchange_products');
$this->db->where('created_at >=', date('Y-m-d H:i:s', strtotime('-15 days')));
$this->db->order_by('created_at', 'DESC'); // Latest first
$query = $this->db->get();

return $query->result();

}
public function supplier_details($name)
{
    $this->db->select('*');
    $this->db->from('suppliers'); 
    $this->db->like('company_name', $name);
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();

    return $query->result();
}


public function supplier_catlog($name)
{
    $this->db->select('*');
    $this->db->from('product_catlog'); 
    $this->db->like('supplierid', $name);
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();

    return $query->result();
}
public function supplier_ads($name)
{
    $this->db->select('*');
    $this->db->from('supplier_ads'); 
    $this->db->like('supplier', $name);
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();

    return $query->result();
}

public function supplier_lt()
{
    $this->db->select('*');
    $this->db->from('suppliers');
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();

    return $query->result();
}

public function gensupplier_lt()
{
    $this->db->select('*');
    $this->db->from('general_suppliers');

    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();

    return $query->result();
}
public function gensupplier_city($city)
{
    $this->db->select('*');
    $this->db->from('general_suppliers');
        $this->db->like('city', $city);
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();
//  echo $this->db->last_query();
    return $query->result();
}


public function get_online_store()
{
    $this->db->select('*');
    $this->db->from('online_store');
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();
    return $query->result();
}
public function get_ila_gurukul()
{
    $this->db->select('*');
    $this->db->from('ila_gurukul');
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();
    return $query->result();
}
public function get_lighting_stock_exchange()
{
    $this->db->select('*');
    $this->db->from('lighting_stock_exchange');
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();
    return $query->result();
}


public function get_products_by_supplier($supplier_id) {
    $this->db->where('is_active', 1); // Only active products
    $this->db->where('supplier_id', $supplier_id); 
    //   $this->db->group_by('category_id'); // Filter by company/supplier
    $query = $this->db->get('products_supplier');
    
    return $query->result(); // Returns array of product objects
}
public function get_all_products()
{
    $this->db->where('is_active', 1); // Only active products
    $query = $this->db->get('products_supplier');
    return $query->result();
}
public function get_all_category()
{
    // $this->db->where('is_active', 1); // Only active products
    $query = $this->db->get('product_categories');
    return $query->result();
}


public function get_service_details()
{
    $this->db->select('*');
    $this->db->from('service_details');
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();
    return $query->result();
}

 public function get_product_by_id($product_id) {
        return $this->db->get_where('products', ['product_id' => $product_id, 'is_active' => 1])->row();
    }
    
     public function get_ilaproduct_by_id($product_id) {
        return $this->db->get_where('stock_exchange_products', ['id' => $product_id])->row();
    }


    // Fetch all active products for listing (optional)
    public function get_all_active_products() {
        $this->db->where('is_active', 1);
        $query = $this->db->get('products');
        return $query->result();
    }

// public function get_product_detail($product_id)
// {
    
//      return $this->db->get_where('products', ['product_id' => $product_id])->row();
//     // $this->db->select('*');
//     // $this->db->from('product_detail');
//     // // $this->db->order_by('created_at', 'DESC'); // Latest first
//     // $query = $this->db->get();
//     // return $query->result();
// }
public function get_media_gallery($table, $orderBy = 'id', $orderType = 'DESC')
{
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by($orderBy, $orderType); // Use the correct variable names
    $query = $this->db->get();
    return $query->result();
}



public function get_news_details()
{
    $this->db->select('*');
    $this->db->from('news_events_details');
    // $this->db->order_by('created_at', 'DESC'); // Latest first
    $query = $this->db->get();
    return $query->result();
}
public function get_product_gallery()
{
    
    $this->db->select('product_name, product_img,price');
    $this->db->from('product_detail_owner');
    // $this->db->where('is_active', 1);
    return $this->db->get()->result();
    // return $this->db->get('product_gallery')->result(); // simple and clean
}

  public function get_user_by_email($email) {
        return $this->db->get('users', ['email' => $email])->row();
    }


// supplier list sponsored ads


public function getAll($table, $orderBy = 'id', $orderType = 'DESC') {
    $this->db->order_by($orderBy, $orderType);
    $query = $this->db->get($table);
    return $query->result();
}

public function getWhere($table, $conditions = [])
{
    return $this->db->get_where($table, $conditions)->result();
}


public function getRow($table, $where)
{
    return $this->db->get_where($table, $where)->row();
}

public function insert($table, $data)
{
    return $this->db->insert($table, $data);
}

public function delete($table, $where)
{
    return $this->db->delete($table, $where);
}

public function get_image_by_id($id)
{
    return $this->db->get_where('gallery', ['aid' => $id])->row();
}

public function delete_image($id)
{
    $this->db->where('aid', $id);
    return $this->db->delete('gallery');
}


}

?>