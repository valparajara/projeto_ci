<?php

class Sales_model extends CI_Model {
    
  function __construct() {
      parent::__construct();
      $this->table = 'sales';
  
  }
}