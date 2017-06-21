<?php

	class Ebooks extends PROJETOCI_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'ebooks';
    }

    function result_getall(){

	    $this->db->select('ebooks.*,authors.*');
	    $this->db->from('ebooks');
	    $this->db->join('authors', 'ebooks.author_id = authors.id'); 
	    $query = $this->db->get();
	    return $query->result();

  }
}