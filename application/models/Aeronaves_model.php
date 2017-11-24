<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aeronaves_model extends CI_Model {

    var $table = "aes_aeronaves";

    function __construct() {
        parent::__construct();
    }

    public function carregaAcfts() {
        $query = $this->db->query("select * from aes_aeronaves");

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    public function dpdAcfts(){
        $this->db->select('cod_aeronave, modelo_aeronave');
        
        $query = $this->db->query("select acft.cod_aeronave, acft.modelo_aeronave from aes_aeronaves acft")->result();
       
       
        $list = array();
        foreach ($query as $result) {
            $list[$result->cod_aeronave] = $result->modelo_aeronave;
        }
        return $list;
        
    }

    public function adicionaMatricula() {
        $date = new DateTime();
        $field = array(
            'cod_cursomatricula' => $this->input->post('cod_cursomatricula'),
            'codaes_matricula' => $this->input->post('codaes_matricula'),
            'nomeguerra_matricula' => $this->input->post('nomeguerra_matricula'),
            'tiposangue_matricula' => $this->input->post('tiposangue_matricula'),
            'fatorsangue_matricula' => $this->input->post('fatorsangue_matricula'),
            'alergicomedicamento_matricula' => $this->input->post('alergicomedicamento_matricula'),
            'acidenteavisonome_matricula' => $this->input->post('acidenteavisonome_matricula'),
            'acidenteavisoparentesco_matricula' => $this->input->post('acidenteavisoparentesco_matricula'),
            'acidenteavisoendereco_matricula' => $this->input->post('acidenteavisoendereco_matricula'),
            'acidenteavisotelefone_matricula' => $this->input->post('acidenteavisotelefone_matricula'),
            'preenchidopor_matricula' => $this->session->userdata('nome_pessoafisica'),
            'data_matricula' => $date->format('d/m/Y H:i:s'),
            'matricula_vigente' => $this->input->post('matricula_vigente'),
            'cpf_matricula' => $this->input->post('cpf_matricula'),
            'nroendereco_matricula' => $this->input->post('nroendereco_matricula'),
        );
        $this->db->insert('aes_matricula', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /*

     * VERIFICAR SE O ALUNO JÁ POSSUI MATRICULA NO CURSO. CASO O RESULTADO DA QUERY FOR > 0 SIGNIFICA
     * QUE EXISTE UMA MATRICULA COM O CURSO E CPF SELECIONADOS, ENTÃO RETORNA TRUE, CASO NÃO POSSUA, RETORNA FALSE
     *      */

    public function verificaMatricula($cpf, $curso) {
        $query = $this->db->query("SELECT * FROM aes_matricula mt where mt.cod_cursomatricula = " . $curso . " and mt.cpf_matricula ='" . $cpf . "' and mt.matricula_vigente = 's'");
        return $query->num_rows();
    }

    public function consultaMtrVigente($cpf) {
        $query = $this->db->query("SELECT * FROM aes_matricula mt inner join aes_login log on log.codaes_login = mt.codaes_matricula where mt.matricula_vigente = 's' and mt.cpf_matricula ='" . $cpf . "'");
        return $query->num_rows();
    }

    public function consultaUsuarioMatriculado($cpf) {
        $query = $this->db->query("SELECT * FROM aes_matricula mt where mt.matricula_vigente = 's' and mt.cpf_matricula ='" . $cpf . "'");
        return $query->num_rows();
    }

    public function listCursos($tipocurso, $cursomatricula) {


        $this->db->select('cod_cursomatricula,descricao_cursomatricula');
        $query = $this->db->query("SELECT c.cod_cursomatricula, c.descricao_cursomatricula from aes_cursos c "
                        . " inner join aes_matricula m on m.cod_cursomatricula != c.cod_cursomatricula "
                        . " where c.tipo_curso != '" . $tipocurso . "' and c.cod_cursomatricula > " . $cursomatricula . "")->result();

        $list = array();
        foreach ($query as $result) {
            $list[$result->cod_cursomatricula] = $result->descricao_cursomatricula;
        }
        return $list;
    }

    public function listAllCursos() {
        $this->db->select('cod_cursomatricula,descricao_cursomatricula');
        $query = $this->db->query("SELECT c.cod_cursomatricula, c.descricao_cursomatricula from aes_cursos c")->result();

        $list = array();
        foreach ($query as $result) {
            $list[$result->cod_cursomatricula] = $result->descricao_cursomatricula;
        }
        return $list;
    }

    public function baixarMatricula($date) {
        $cod_matricula = $this->input->post('cod_matricula');
        
        $query = $this->db->query("UPDATE aes_matricula SET matricula_vigente = 'n', baixa_matricula = '".$date."' WHERE cod_matricula = ' $cod_matricula '" );
        
        return $query;
    }

}