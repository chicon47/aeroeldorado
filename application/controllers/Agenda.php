<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Agenda extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('Agenda_model', 'agm');
    }

   
    public function desmarcaVoo(){
        $cod_agenda = $this->input->post('cod_agenda');
        $result = $this->agm->desmarcaVoo($cod_agenda);
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    
    public function marcaVoos(){
        
        $result = $this->agm->marcaVoos();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    
    
    public function buscaDiasSemana(){
        $limit = $this->input->post('qtd_dias');
        $result = $this->agm->buscaDiasSemana($limit);
        echo json_encode($result);
    }
    
    
    public function cabecalho(){
        $dia_mes = $this->input->post('dia_mes');
        $result = $this->agm->cabecalho($dia_mes);
        echo json_encode($result);
    }
    
    public function carregaAgenda(){
        $dia_mes = $this->input->post('dia_mes');
        $result = $this->agm->carregaAgenda($dia_mes);
        echo json_encode($result);
    }
    
    
    public function carregaInvasAdmin(){
        $dia_mes = $this->input->post('dia_mes');
        $array_dias = $this->input->post('array');
        $result = $this->agm->carregaInvasAdmin($dia_mes, $array_dias);
        
        echo json_encode($result);
    }
    
    public function carregaInvasDefault(){
        $dia_mes = $this->input->post('dia_mes');
        $array_dias = $this->input->post('array');
        $result = $this->agm->carregaInvasDefault($dia_mes, $array_dias);
        
        echo json_encode($result);
    }
    

}
