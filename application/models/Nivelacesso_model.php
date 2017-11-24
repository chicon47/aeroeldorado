<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nivelacesso_model extends CI_Model {

    var $table = "aes_nivelacesso";

    function __construct() {
        parent::__construct();
    }
    
    public function carregaNivelAcesso(){
        $this->db->select('cod_nivelacesso,desc_nivelacesso');
        $query = $this->db->query("SELECT * from aes_nivelacesso")->result();
       
        $list = array();
        foreach ($query as $result) {
            $list[$result->cod_nivelacesso] = $result->desc_nivelacesso;
        }
        return $list;
    }
    
}