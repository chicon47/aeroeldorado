<?php

class Quadroaviso_model extends CI_Model {

    public function getAviso() {
        $query = $this->db->get('aes_quadroaviso');
        return $query->result();
    }

    public function updateAviso($dados) {



        $this->db->update('aes_quadroaviso', $dados);


        return true;
    }

    public function buscaQuadro() {
        $query = $this->db->query("SELECT "
                . "qa.desc_quadroaviso, "
                . "DATE_FORMAT(qa.data_quadroaviso,  '%d/%m/%Y %H:%i' ) AS data_quadroaviso, "
                . "pf.nomeguerra_pessoafisica "
                . "FROM aes_quadroaviso qa "
                . "inner join aes_pessoafisica pf "
                . "on pf.cod_pessoafisica = qa.cod_pessoafisica ");
        return $query->result();
    }

}
