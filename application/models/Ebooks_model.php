<?php
class Ebooks_Model extends PROJETOCI_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'ebooks';
    }
}