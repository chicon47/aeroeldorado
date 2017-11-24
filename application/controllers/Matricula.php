<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Matricula extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('Matricula_model', 'mt');
    }

    public function adicionaMatricula() {
        $result = $this->mt->adicionaMatricula();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function verificaMatricula() {
        $cpf = $this->input->post('cpf_matricula');
        $curso = $this->input->post('cod_cursomatricula');
        $result = $this->mt->verificaMatricula($cpf, $curso);
        $msg['success'] = true;
        $msg['type'] = 'add';
        if ($result > 0) {
            $msg['type'] = 'break';
        }
        echo json_encode($msg);
    }

    public function consultaMtrVigente() {
        $cpf = $this->input->post('dadoconsulta');
        $result = $this->mt->consultaMtrVigente($cpf);
        $result2 = $this->mt->consultaUsuarioMatriculado($cpf);
        $msg['success'] = true;
        $msg['type'] = 'add';
        if ($result > 0) {
            $msg['type'] = 'break';
        }

        if ($result2 < 1) {
            $msg['type'] = 'break_2';
        }
        echo json_encode($msg);
    }

    public function carregaMatriculas() {
        $result = $this->mt->carregaMatriculas();
        echo json_encode($result);
    }

    public function listCursos() {
        
        $tipocurso = $this->input->post("tipo_curso");
        $cursomatricula = $this->input->post("cod_cursomatricula");

        if ($tipocurso != null && $cursomatricula != null) {

            $data = $this->mt->listAllCursos();
            
        } else {
            
            $data = $this->mt->listAllCursos();
            
        }
        
        echo json_encode($data);
    }
    
    
    public function baixarMatricula(){
        $date = new DateTime();
        $data = $date->format('d/m/Y H:i:s');
        $result = $this->mt->baixarMatricula($data);
        $msg['success'] = false;
        $msg['type'] = 'update';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
        
    }
}
