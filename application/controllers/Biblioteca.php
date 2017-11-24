<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Biblioteca extends CI_Controller {

    public function index() {
        
    }

    public function filtro($acft, $cat) {
        $this->load->model('biblioteca_model');
        $filter['filt'] = $this->biblioteca_model->filter($acft, $cat);
        return $filter;
        
    }

}
