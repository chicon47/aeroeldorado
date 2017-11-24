<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Nivelacesso extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('Nivelacesso_model', 'nv');
    }
    
    
    public function carregaNivelAcesso(){
        $result = $this->nv->carregaNivelAcesso();
        echo json_encode($result);
    }
}