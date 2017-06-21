<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class PROJETOCI_Model extends CI_Model {

  // Variável que define o nome da tabela
  var $table = "";

  /**
  * Método Construtor
  */
  function __construct() {
    parent::__construct();
  }

  /**
  * Lista todos os registros
  *
  * @param string $sort Campo para ordenação dos registros
  *
  * @param string $order Tipo de ordenação: ASC ou DESC
  *
  * @return array
  */
  function GetAll($sort = 'id', $order = 'asc') {
    $this->db->order_by($sort, $order);
    $query = $this->db->get($this->table);

    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return null;
    }

  }

}

/* End of file */