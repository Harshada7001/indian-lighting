<?php

	class master_model extends CI_Model{
		
		public function getCategoryDetails($id) {
			$query = $this->db->get_where('category', array('id' => $id));
			return $query->result();
		}
	
			public function getsubCategoryDetails($id) {
			    $this->db->from('subcategory');
        $this->db->where("FIND_IN_SET('$id', category_id)");
        $query = $this->db->get();
        // return $query->result();
// 			$query = $this->db->get_where('furn_subcategory', array('category_id' => $id));
// 			//$query = $this->db->select('*')->from('furn_subcategory');
// 		   // echo"<pre>";print_r($query->result()); die;
			//print_r($query);die;
			return $query->result();
		}
			public function getproductDetails($id) {
			$query = $this->db->get_where('product', array('subcategory_id' => $id));
			//$query = $this->db->select('*')->from('furn_subcategory');
			//print_r($query->result()); die;
			//print_r($query);die;
			return $query->result();
		}
		
		public function getproduct($productId) {
        // Replace 'products' with your actual table name
        $this->db->where('product_id', $productId);
        $query = $this->db->get('product');
			//print_r($query);die;
        if ($query->num_rows() > 0) {
            return $query->row(); // Return a single row as an object
        } else {
            return null; // Return null if no product found
        }
    }

	}


?>