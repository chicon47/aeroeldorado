<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoafisica_model extends CI_Model {

    var $table = "aes_pessoafisica";

    function __construct() {
        parent::__construct();
    }

    public function buscaPessoa() {
        $query = $this->db->query("select pf.*, mt.matricula_vigente, c.tipo_curso, mt.cod_cursomatricula, mt.baixa_matricula from aes_pessoafisica pf  left join aes_matricula mt on mt.cpf_matricula = pf.cpf_pessoafisica  left join aes_cursos c on c.cod_cursomatricula = mt.cod_cursomatricula group by pf.cod_pessoafisica order by pf.cod_pessoafisica limit 10");
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    public function dpdAlunos(){
        $this->db->select('cod_pessoafisica, nomeguerra_pessoafisica');
        
        $query = $this->db->query("select pf.cod_pessoafisica, pf.nomeguerra_pessoafisica from aes_pessoafisica pf  order by pf.nomeguerra_pessoafisica")->result();
       
       
        $list = array();
        foreach ($query as $result) {
            $list[$result->cod_pessoafisica] = $result->nomeguerra_pessoafisica;
        }
        return $list;
        
    }
    
    public function buscaPessoas($pag, $maximo) {
        $inicio = ($pag * $maximo) - $maximo;
        $query = $this->db->query("select pf.*, mt.matricula_vigente, c.tipo_curso, mt.cod_cursomatricula, mt.baixa_matricula from aes_pessoafisica pf  left join aes_matricula mt on mt.cpf_matricula = pf.cpf_pessoafisica  left join aes_cursos c on c.cod_cursomatricula = mt.cod_cursomatricula group by pf.cod_pessoafisica order by pf.cod_pessoafisica limit $inicio, $maximo ");
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    
    public function buscaPessoasCont() {
        
        $query = $this->db->query("select pf.*, mt.matricula_vigente, c.tipo_curso, mt.cod_cursomatricula, mt.baixa_matricula from aes_pessoafisica pf  left join aes_matricula mt on mt.cpf_matricula = pf.cpf_pessoafisica  left join aes_cursos c on c.cod_cursomatricula = mt.cod_cursomatricula group by pf.cod_pessoafisica order by pf.cod_pessoafisica ");
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    

    public function consultaCpf($cpf) {
        $query = $this->db->query("SELECT * FROM aes_pessoafisica pf where pf.cpf_pessoafisica = '" . $cpf . "'");
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return $query->row();
        }
    }

    public function buscaFiltro($campo, $dp) {

        $query = $this->db->query("SELECT * FROM aes_pessoafisica where $dp LIKE '%$campo%' collate utf8_general_ci");

        $query_all = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return $query_all->result();
        }
    }
    
    
    public function buscaPessoaAddINVA($campo) {
        
        $query = $this->db->query("SELECT * FROM aes_pessoafisica where cod_pessoafisica = '" . $campo . "'");
        
        $query_all = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function CountAll() {
        return $this->db->count_all($this->table);
    }

    public function adicionaPessoa() {
        $field = array(
            'codaes_matricula' => $this->input->post('codaes_matricula'),
            'nomeguerra_pessoafisica' => $this->input->post('nomeguerra_pessoafisica'),
            'nome_pessoafisica' => $this->input->post('nome_pessoafisica'),
            'anac_pessoafisica' => $this->input->post('anac_pessoafisica'),
            'sexo_pessoafisica' => $this->input->post('sexo_pessoafisica'),
            'telefone_pessoafisica' => $this->input->post('telefone_pessoafisica'),
            'datanascto_pessoafisica' => $this->input->post('datanascto_pessoafisica'),
            'estadocivil_pessoafisica' => $this->input->post('estadocivil_pessoafisica'),
            'naturalidade_pessoafisica' => $this->input->post('naturalidade_pessoafisica'),
            'nacionalidade_pessoafisica' => $this->input->post('nacionalidade_pessoafisica'),
            'nomepai_pessoafisica' => $this->input->post('nomepai_pessoafisica'),
            'nomemae_pessoafisica' => $this->input->post('nomemae_pessoafisica'),
            'email_pessoafisica' => $this->input->post('email_pessoafisica'),
            'rg_pessoafisica' => $this->input->post('rg_pessoafisica'),
            'cpf_pessoafisica' => $this->input->post('cpf_pessoafisica'),
            'certreservista_pessoafisica' => $this->input->post('certreservista_pessoafisica'),
            'rgorgaoexp_pessoafisica' => $this->input->post('rgorgaoexp_pessoafisica'),
            'rgdataemissao_pessoafisica' => $this->input->post('rgdataemissao_pessoafisica'),
            'certreservistacategoria_pessoafisica' => $this->input->post('certreservistacategoria_pessoafisica'),
            'tituloeleitor_pessoafisica' => $this->input->post('tituloeleitor_pessoafisica'),
            'tituloeleitorsecao_pessoafisica' => $this->input->post('tituloeleitorsecao_pessoafisica'),
            'tituloeleitorzona_pessoafisica' => $this->input->post('tituloeleitorzona_pessoafisica'),
            
        );
        $this->db->insert('aes_pessoafisica', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function editarPessoa() {
        $cod_pessoafisica = $this->input->get('cod_pessoafisica');
        $this->db->where('cod_pessoafisica', $cod_pessoafisica);
        $query = $this->db->get('aes_pessoafisica');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function updatePessoaFisica() {
        $cod_pessoafisica = $this->input->post('cod_pessoafisica');
        $field = array(
            'nome_pessoafisica' => $this->input->post('nome_pessoafisica'),
            'anac_pessoafisica' => $this->input->post('anac_pessoafisica'),
            'sexo_pessoafisica' => $this->input->post('sexo_pessoafisica'),
            'telefone_pessoafisica' => $this->input->post('telefone_pessoafisica'),
            'datanascto_pessoafisica' => $this->input->post('datanascto_pessoafisica'),
            'estadocivil_pessoafisica' => $this->input->post('estadocivil_pessoafisica'),
            'naturalidade_pessoafisica' => $this->input->post('naturalidade_pessoafisica'),
            'nacionalidade_pessoafisica' => $this->input->post('nacionalidade_pessoafisica'),
            'nomepai_pessoafisica' => $this->input->post('nomepai_pessoafisica'),
            'nomemae_pessoafisica' => $this->input->post('nomemae_pessoafisica'),
            'email_pessoafisica' => $this->input->post('email_pessoafisica'),
            'rg_pessoafisica' => $this->input->post('rg_pessoafisica'),
            'cpf_pessoafisica' => $this->input->post('cpf_pessoafisica'),
            'certreservista_pessoafisica' => $this->input->post('certreservista_pessoafisica'),
            'rgorgaoexp_pessoafisica' => $this->input->post('rgorgaoexp_pessoafisica'),
            'certreservistacategoria_pessoafisica' => $this->input->post('certreservistacategoria_pessoafisica'),
            'tituloeleitor_pessoafisica' => $this->input->post('tituloeleitor_pessoafisica'),
            'tituloeleitorzona_pessoafisica' => $this->input->post('tituloeleitorzona_pessoafisica'),
            'tituloeleitorsecao_pessoafisica' => $this->input->post('tituloeleitorsecao_pessoafisica'),
        );
        $this->db->where('cod_pessoafisica', $cod_pessoafisica);
        $this->db->update('aes_pessoafisica', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function deletarPessoaFisica() {
        $id = $this->input->get('cod_pessoafisica');
        $this->db->where('cod_pessoafisica', $id);
        $this->db->delete('aes_pessoafisica');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function deletarLogin() {
        $id = $this->input->get('cod_pessoafisica');
        $this->db->where('cod_pessoafisica', $id);
        $this->db->delete('aes_login');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function consultaLogin($codaes, $cpf) {
        $query = $this->db->query(" select DISTINCT pef.* from aes_login log "+ 
            " inner join aes_pessoafisica pef on pef.cod_pessoafisica = log.cod_pessoafisica "+
            " inner join aes_matricula mat on mat.codaes_matricula = pef.codaes_matricula "+
            " where mat.matricula_vigente = 's' and pef.codaes_matricula = '" .$codaes. " and pef.cpf_pessoafisica = '" . $cpf . "'");
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return $query->row();
        }
    }
    
    
    public function inserirLogin(){
       
        $field = array(
            
            'senha_login' => md5($this->input->post('senha_login')),
            'cod_nivelacesso' => $this->input->post('cod_nivelacesso'),
            'cod_pessoafisica' => $this->input->post('cod_pessoafisica'),
            'codaes_login' => $this->input->post('codaes_login'),
            'ativo' => $this->input->post('ativo'),
            
        );
        
        $this->db->insert('aes_login', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
