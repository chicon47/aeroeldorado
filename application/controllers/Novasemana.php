<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Novasemana extends CI_Controller {

  function __construct() {
        parent:: __construct();
        $this->load->model('Novasemana_model', 'sm');
    }
    public function addSemana() {
        $result = $this->sm->addSemana();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
}
