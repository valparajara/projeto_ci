<?php

	class Authors extends CI_Model {
  	function __construct() {
    	parent::__construct();
    	$this->table = 'authors';
  
  }
}