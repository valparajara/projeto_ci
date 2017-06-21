<?php

	class Ebooks_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'ebooks';
    }

    function result_getall(){

	    $this->db->select('ebooks.*,authors.*');
	    $this->db->from('ebooks');
	    $this->db->join('authors', 'ebooks.author_id = authors.id', 'INNER');

	    $this->db->order_by('ebooks.title ASC');

	    $query = $this->db->get();
	    
	    return $query->result();

 		}

 		function total_sales_value(){
 			$this->db->select('ebooks.*,sales.*');
	    $this->db->from('ebooks');
	    $this->db->where('ebooks.id = sales.ebook_id');
	    $this->db->select_sum('ebooks.price');
 			
 			$query_value_total = $this->db->get();
	    
	    return $query_value_total->result();
 		}
}

