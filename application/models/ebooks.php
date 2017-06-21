<?php

	class Ebooks extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'ebooks';
    }

    function result_getall(){

	    $this->db->select('ebooks.*,authors.*');
	    $this->db->from('ebooks');
	    $this->db->join('authors', 'ebooks.author_id = authors.id', 'INNER');
	   	$this->db->join('sales', 'ebooks.id = sales.ebook_id', 'INNER'); 

	    $query = $this->db->get();
	    
	    return $query->result();

  }
}