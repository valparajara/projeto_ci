<?php
class Sales_Model extends PROJETOCI_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'sales';
    }
}