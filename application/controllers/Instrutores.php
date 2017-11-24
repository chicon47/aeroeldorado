<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Instrutores extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('Instrutores_model', 'im');
    }

    
    public function dpdInvas(){
        $result = $this->im->dpdInvas();
        
        echo json_encode($result);
    }
    public function adicionaInva() {
        
        $result = $this->im->adicionaInva();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function editarPermInva() {
        $result = $this->im->editarPermInva();
        echo json_encode($result);
    }

    public function buscaInvas() {
        $result = $this->im->buscaInvas();
        echo json_encode($result);
    }

    public function deletarInva() {

        $result = $this->im->deletarInva();

        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function updatePermInva() {

        $result = $this->im->updatePermInva();
        var_dump($result);
        $msg['success'] = false;
        $msg['type'] = 'update';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}
