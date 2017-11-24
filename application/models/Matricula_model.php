<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matricula_model extends CI_Model {

    var $table = "aes_matricula";

    function __construct() {
        parent::__construct();
    }

    public function carregaMatriculas($sort = 'nome_pessoafisica', $order = 'asc') {
        $query = $this->db->query("select mtr.cod_matricula, "
                . " mtr.nomeguerra_matricula, "
                . " mtr.data_matricula, "
                . " (CASE WHEN mtr.baixa_matricula is null or mtr.baixa_matricula = '' THEN '<b>ATIVA</b>' ELSE  CONCAT('BAIXADA EM ', mtr.baixa_matricula) END ) AS baixa_matricula,  "
                . " (CASE WHEN mtr.matricula_vigente = 's' THEN 'SIM' ELSE 'NÃO' END ) AS matricula_vigente, "
                . " mtr.cod_cursomatricula, "
                . " mtr.codaes_matricula, "
                . " pf.nome_pessoafisica, "
                . " cur.descricao_cursomatricula from aes_matricula mtr"
                . " inner join aes_pessoafisica pf on pf.cpf_pessoafisica = mtr.cpf_matricula"
                . " inner join aes_cursos cur on cur.cod_cursomatricula = mtr.cod_cursomatricula");

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
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
