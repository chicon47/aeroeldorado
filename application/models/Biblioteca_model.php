<?php

class Biblioteca_model extends CI_Model {

    public function buscaAtt() {
        $query = $this->db->query("SELECT * FROM aes_biblioteca");
        return $query->result();
    }

    public function filter($acft, $cat) {
        $this->load->model('biblioteca_model');
        if ($acft && $cat == NULL) {
            $query = $this->db->query("SELECT * FROM aes_biblioteca");
        }
        if ($cat != NULL) {
            $query = $this->db->query("SELECT * FROM aes_biblioteca b WHERE b.categoria_item = '" . $cat . "'");
        }

        if ($acft != NULL) {
            $query = $this->db->query("SELECT * FROM aes_biblioteca b WHERE b.aeronave_item = '" . $acft . "'");
        }

        return $query->result();
    }

}
